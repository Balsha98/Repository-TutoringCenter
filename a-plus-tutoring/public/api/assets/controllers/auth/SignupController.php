<?php

namespace Api\Assets\Controllers\Auth;

use Api\Assets\Constraints\Auth\SignupConstraints;
use Api\Assets\Controllers\AbstractController;
use Source\Handlers\Helpers\Classes\Session;
use Source\Handlers\Helpers\Classes\Validation;

class SignupController extends AbstractController
{
    public function post()
    {
        Validation::setData($this->getData());
        Validation::setConstraints(SignupConstraints::getConstraints());

        if (!empty(Validation::validate())) {
            return Validation::getResponse();
        }

        $data = $this->getData();

        if (!empty($this->checkEmailIfExists($data['role'], $data['email_address']))) {
            return [
                'status' => 'error',
                'response' => [
                    'title' => 'Invalid Signup',
                    'message' => 'Account with the given email address already exists.'
                ]
            ];
        }

        if (array_key_exists('error', $this->createNewUserAccount($data))) {
            return [
                'status' => 'error',
                'response' => [
                    'title' => 'Internal Error',
                    'message' => $this->createNewUserAccount($data)['error']
                ]
            ];
        }

        $lastInsertID = $this->getLastInsertID($data['role'])['id'];

        Session::set('account_id', $lastInsertID);
        Session::set('account_role', $data['role']);
        Session::set('account_active', 1);

        return [
            'status' => 'success',
            'response' => [
                'title' => 'Successful Signup',
                'message' => 'You have successfully been signed up.'
            ],
            'route' => '/dashboard'
        ];
    }

    private function checkEmailIfExists(string $role, string $email)
    {
        $query = 'SELECT * FROM ' . $role . ' WHERE email_address = :email_address;';
        return $this->getDbInstance()->executeQuery(
            $query, [':email_address' => $email]
        )->getQueryResult(true);
    }

    private function createNewUserAccount(array $data)
    {
        $formattedParams = [];
        $query = 'INSERT INTO ' . $data['role'] . ' SET ';

        foreach ($data as $key => $value) {
            if ($key === 'role')
                continue;

            $formattedParams[':' . $key] = $value;
            $query .= $key . ' = :' . $key . ',';
        }

        $formattedParams[':password'] = hash('sha256', $formattedParams[':password']);
        $query = substr($query, 0, strlen($query) - 1) . ';';

        return $this->getDbInstance()->executeQuery(
            $query, $formattedParams
        )->getQueryResult(true);
    }

    private function getLastInsertID(string $role)
    {
        $query = 'SELECT MAX(id) AS id FROM ' . $role . ';';
        return $this->getDbInstance()->executeQuery(
            $query
        )->getQueryResult(true);
    }
}

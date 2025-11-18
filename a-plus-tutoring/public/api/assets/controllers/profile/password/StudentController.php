<?php

namespace Api\Assets\Controllers\Profile\Password;

use Api\Assets\Constraints\Profile\PasswordConstraints;
use Api\Assets\Controllers\AbstractController;
use Source\Handlers\Helpers\Classes\Validation;

class StudentController extends AbstractController
{
    public function put()
    {
        Validation::setData($this->getData());
        Validation::setConstraints(PasswordConstraints::getConstraints());

        if (!empty(Validation::validate())) {
            return Validation::getResponse();
        }

        $data = $this->getData();

        if (!empty($this->updateProfilePassword($data))) {
            return [
                'status' => 'error',
                'response' => [
                    'title' => 'Internal Error',
                    'message' => 'Unable to process your request.'
                ]
            ];
        }

        return [
            'status' => 'success',
            'response' => [
                'title' => 'Password Change Successful',
                'message' => 'You have successfully changed your password.'
            ],
            'route' => 'reload'
        ];
    }

    private function updateProfilePassword(array $data)
    {
        $query = '
            UPDATE student SET 
                password = :password
            WHERE
                id = :id;
        ';

        $data['password'] = hash('sha256', $data['password']);

        return $this->getDbInstance()->executeQuery(
            $query, [...$data, 'id' => $this->getID()]
        )->getQueryResult(true);
    }
}

<?php

namespace Api\Assets\Controllers\Auth;

use Api\Assets\Controllers\AbstractController;
use Source\Handlers\Helpers\Classes\Session;

class LoginApiController extends AbstractController
{
    public function post()
    {
        $data = $this->getData();
        $email = $data['email'];

        $account = $this->fetchAccount($email);

        // Guard clause: account does not exist.
        if (empty($account)) {
            return [
                'status' => 'error',
                'response' => [
                    'title' => 'Invalid Credentials',
                    'message' => 'No active account with the given email.',
                    'next-route' => 'wait'
                ]
            ];
        }

        $hash = hash('sha256', $data['password']);
        $storedHash = $account['password'];

        // Guard clause: password does not match.
        if (!hash_equals($storedHash, $hash)) {
            return [
                'status' => 'error',
                'response' => [
                    'title' => 'Invalid Credentials',
                    'message' => 'Make sure you are providing valid credentials.',
                    'next-route' => 'wait'
                ]
            ];
        }

        Session::set('account-id', $account['id']);
        Session::set('account-type', $account['type']);
        Session::set('account-active', 1);

        return [
            'status' => 'success',
            'response' => [
                'title' => 'Successful Login',
                'message' => 'You have successfully been logged in.',
                'next-route' => '/dashboard'
            ]
        ];
    }

    private function fetchAccount(string $email)
    {
        $query = 'SELECT * FROM (
            SELECT id, type, email, password FROM student 
                UNION 
            SELECT id, type, email, password FROM tutor 
        ) AS accounts WHERE accounts.email = :email;';

        return $this->getDbInstance()->executeQuery(
            $query, [':email' => $email]
        )->getQueryResult(true);
    }
}

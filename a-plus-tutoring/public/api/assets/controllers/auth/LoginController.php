<?php

namespace Api\Assets\Controllers\Auth;

use Api\Assets\Controllers\AbstractController;
use Source\Handlers\Helpers\Classes\Session;

class LoginController extends AbstractController
{
    public function post()
    {
        $data = $this->getData();
        $email = $data['email_address'];

        $account = $this->fetchAccount($email);

        // Guard clause: account does not exist.
        if (empty($account)) {
            return [
                'status' => 'error',
                'response' => [
                    'title' => 'Invalid Credentials',
                    'message' => 'No active account with the given email.',
                ],
                'route' => 'wait'
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
                ],
                'route' => 'wait'
            ];
        }

        Session::set('account_id', $account['id']);
        Session::set('account_role', $account['role']);
        Session::set('account_active', 1);

        return [
            'status' => 'success',
            'response' => [
                'title' => 'Successful Login',
                'message' => 'You have successfully been logged in.',
            ],
            'route' => '/dashboard'
        ];
    }

    private function fetchAccount(string $email)
    {
        foreach (['student', 'tutor'] as $table) {
            $return = $this->getDbInstance()->executeQuery(
                'SELECT * FROM ' . $table . ' WHERE email_address = :email_address;',
                [':email_address' => $email]
            )->getQueryResult(true);

            if (!empty($return)) {
                $return['role'] = $table;

                return $return;
            }
        }

        return [];
    }
}

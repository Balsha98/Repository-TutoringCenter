<?php

namespace Api\Assets\Constraints\Auth;

use Api\Assets\Constraints\IConstraints;

class SignupConstraints implements IConstraints
{
    private static array $constraints = [
        'first_name' => [
            'type' => 'text',
            'pattern' => 'only-letters',
            'length' => [
                'min' => 3,
                'max' => 25
            ],
        ],
        'last_name' => [
            'type' => 'text',
            'pattern' => 'only-letters',
            'length' => [
                'min' => 3,
                'max' => 25
            ],
        ],
        'email_address' => [
            'type' => 'email'
        ],
        'password' => [
            'type' => 'text',
            'pattern' => 'certain-symbols',
            'length' => [
                'min' => 8,
                'max' => 20
            ]
        ]
    ];

    public static function getConstraints()
    {
        return self::$constraints;
    }
}

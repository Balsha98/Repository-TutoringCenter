<?php

namespace Api\Assets\Validation\Auth;

use Api\Assets\Validation\IValidation;

class SignupValidation implements IValidation
{
    private static array $rules = [
        'first-name' => [
            'null' => false,
            'type' => 'text',
            'pattern' => 'only-letters',
            'length' => [
                'min' => 3,
                'max' => 25
            ],
        ],
        'last-name' => [
            'null' => false,
            'type' => 'text',
            'pattern' => 'only-letters',
            'length' => [
                'min' => 3,
                'max' => 25
            ],
        ],
        'major' => [
            'null' => false,
            'type' => 'select'
        ],
        'role' => [
            'null' => false,
            'type' => 'select'
        ],
        'email' => [
            'null' => false,
            'type' => 'email'
        ],
        'password' => [
            'null' => false,
            'type' => 'text',
            'pattern' => 'certain-symbols',
            'length' => [
                'min' => 8,
                'max' => 20
            ]
        ]
    ];

    public static function getRules()
    {
        return self::$rules;
    }
}

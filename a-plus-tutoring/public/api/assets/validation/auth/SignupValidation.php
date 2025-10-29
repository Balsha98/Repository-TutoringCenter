<?php

namespace Api\Assets\Validation\Auth;

use Api\Assets\Validation\IValidation;

class SignupValidation implements IValidation
{
    private static array $rules = [
        'first-name' => [
            'null' => false,
            'type' => 'string',
            'pattern' => 'only-letters',
            'length' => [
                'min' => 3,
                'max' => 25
            ],
        ],
        'last-name' => [
            'null' => false,
            'type' => 'string',
            'pattern' => 'only-letters',
            'length' => [
                'min' => 3,
                'max' => 25
            ],
        ],
        'major' => [
            'null' => false,
            'type' => 'string',
            'pattern' => 'special-cases',
            'length' => [
                'min' => 10,
                'max' => 50
            ],
        ],
        'role' => [
            'null' => false,
            'type' => 'string',
            'pattern' => 'only-letters',
        ],
        'email' => [
            'type' => 'email'
        ],
        'password' => [
            'null' => false,
            'type' => 'string',
            'pattern' => 'special-cases',
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

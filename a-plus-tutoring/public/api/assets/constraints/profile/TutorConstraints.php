<?php

namespace Api\Assets\Constraints\Profile;

use Api\Assets\Constraints\IConstraints;

class TutorConstraints implements IConstraints
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
        'phone' => [
            'type' => 'text',
            'pattern' => 'phone-symbols',
            'length' => [
                'min' => 2,
                'max' => 20
            ]
        ]
    ];

    public static function getConstraints()
    {
        return self::$constraints;
    }
}

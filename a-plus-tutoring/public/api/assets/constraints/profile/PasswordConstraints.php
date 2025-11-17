<?php

namespace Api\Assets\Constraints\Profile;

use Api\Assets\Constraints\IConstraints;

class PasswordConstraints implements IConstraints
{
    private static array $constraints = [
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

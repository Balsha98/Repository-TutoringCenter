<?php

namespace Api\Assets\Constraints\Profile;

use Api\Assets\Constraints\IConstraints;

class ImageConstraints implements IConstraints
{
    private static array $constraints = [
        'image' => [
            'type' => 'url'
        ]
    ];

    public static function getConstraints()
    {
        return self::$constraints;
    }
}

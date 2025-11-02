<?php

namespace Source\Handlers\Helpers\Classes;

class Validation
{
    private static array $data;
    private static array $constraints;

    private static array $patterns = [
        'only-letters' => '#[^a-zA-Z]#',
        'certain-symbols' => '#[^a-zA-Z0-9.,!&? ]#',
        'none-symbols' => '#[^a-zA-Z0-9- ]#'
    ];

    private static array $response = [];

    public static function getResponse()
    {
        return self::$response;
    }

    public static function setData(array $data)
    {
        self::$data = $data;
    }

    public static function setConstraints(array $constraints)
    {
        self::$constraints = $constraints;
    }

    public static function validate()
    {
        if (!empty(self::$data)) {
            foreach (self::$data as $key => $value) {
                if (array_key_exists($key, self::$constraints)) {
                    $apiConstraints = self::$constraints[$key];
                    $columnType = $apiConstraints['type'];

                    // Data integrity.
                    if ($columnType === 'text') {
                        $pattern = self::$patterns[$apiConstraints['pattern']];
                        if (preg_match($pattern, $value)) {
                            return self::buildErrorMessage($key, $columnType, 'pattern');
                        }

                        ['min' => $min, 'max' => $max] = $apiConstraints['length'];
                        if (strlen($value) < $min || strlen($value) > $max) {
                            return self::buildErrorMessage($key, $columnType, 'length');
                        }
                    } else if ($columnType === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        return self::buildErrorMessage($key, $columnType);
                    } else if ($columnType === 'number') {
                        ['min' => $min, 'max' => $max] = $apiConstraints['length'];

                        if ((int) $value < $min || (int) $value > $max) {
                            return self::buildErrorMessage($key, $columnType);
                        }
                    }
                }
            }
        }

        return [];
    }

    private static function buildErrorMessage(string $key, string $type, string $reason = '')
    {
        $capitalizedKey = self::capitalize($key);
        $length = self::$constraints[$key]['length'] ?? [];

        return self::$response = [
            'status' => 'error',
            'response' => [
                'title' => 'Invalid ' . $capitalizedKey,
                'message' => match ($type) {
                    'text' => match ($reason) {
                        'pattern' => $capitalizedKey . ' is of the wrong format.',
                        'length' => $capitalizedKey . ' must be between ' . $length['min'] . ' and ' . $length['max'] . ' chars, inclusively.'
                    },
                    'email' => $capitalizedKey . ' is of the wrong format.',
                    'number' => $capitalizedKey . ' must be between ' . $length['min'] . ' and ' . $length['max'] . ' chars, inclusively.'
                },
            ],
            'invalid-input-id' => $key
        ];
    }

    private static function capitalize(string $string)
    {
        if (preg_match('#[-]#', $string)) {
            return implode(' ', array_map(
                fn($part) => ucfirst($part),
                explode('-', $string)
            ));
        }

        return ucfirst($string);
    }
}

<?php

namespace Source\Handlers\Helpers\Classes;

class Validation
{
    private static array $data;
    private static array $rules;

    private static array $patterns = [
        'only-letters' => '#[^a-zA-Z]#',
        'special-cases' => '#[^a-zA-Z0-9.,!&? ]#',
        'none-symbols' => '#[^a-zA-Z0-9- ]#',
    ];

    public static function validate()
    {
        foreach (self::$data as $key => $value) {
            if (self::$rules[$key]) {
                $rules = self::$rules[$key];

                // Check if value is required.
                if (!$rules['null'] && empty($value)) {
                    return self::buildError($key);
                }

                // Check string structure.
                if ($rules['type'] === 'string') {
                    if (preg_match($rules['pattern'], $value)) {
                        [$min, $max] = $rules['length'];
                        $strLen = strlen($value);

                        if ($strLen < $min || $strLen > $max) {
                            return self::buildError($key);
                        }

                        return self::buildError($key);
                    }

                    continue;
                }

                // Check email structure.
                if ($rules['type'] === 'email') {
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        return self::buildError($key);
                    }

                    continue;
                }

                // Check number value.
                if ($rules['type'] === 'int') {
                    [$min, $max] = $rules['length'];
                    $casted = (int) $value;

                    if ($casted < $min || $casted > $max) {
                        return self::buildError($key);
                    }

                    continue;
                }
            }
        }

        return [];
    }

    // SETTERS

    public static function setData(array $data)
    {
        self::$data = $data;
    }

    public static function setRules(array $rules)
    {
        self::$rules = $rules;
    }

    // HELPERS

    private static function buildError(string $key)
    {
        return [
            'status' => 'error',
            'response' => [
                'title' => '',
                'message' => ''
            ]
        ];
    }
}

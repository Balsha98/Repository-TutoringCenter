<?php

namespace Source\Handlers\Helpers\Classes;

class Validation
{
    private static array $data;
    private static array $rules;

    private static array $patterns = [
        'only-letters' => '#[^a-zA-Z]#',
        'certain-symbols' => '#[^a-zA-Z0-9.,!&? ]#',
        'none-symbols' => '#[^a-zA-Z0-9- ]#',
    ];

    private static array $response = [];

    public static function validate()
    {
        if (!empty(self::$data)) {
            foreach (self::$data as $key => $value) {
                if (self::$rules[$key]) {
                    $rules = self::$rules[$key];
                    $type = $rules['type'];

                    // Check if null.
                    if (!$rules['null'] && empty($value)) {
                        return self::buildError($key, $type);
                    }

                    // Check text.
                    if ($type === 'text') {
                        $pattern = self::$patterns[$rules['pattern']];

                        if (preg_match($pattern, $value)) {
                            [$min, $max] = $rules['length'];
                            $strLen = strlen($value);

                            if ($strLen < $min || $strLen > $max) {
                                return self::buildError($key, $type, 'length');
                            }

                            return self::buildError($key, $type, 'pattern');
                        }

                        continue;
                    }

                    // Check email.
                    if ($type === 'email') {
                        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                            return self::buildError($key, $type);
                        }

                        continue;
                    }

                    // Check number.
                    if ($type === 'number') {
                        [$min, $max] = $rules['length'];

                        if ((int) $value < $min || (int) $value > $max) {
                            return self::buildError($key, $type);
                        }

                        continue;
                    }
                }
            }
        }

        return [];
    }

    // GETTERS

    public static function getResponse()
    {
        return self::$response;
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

    private static function buildError(string $key, string $type, string $reason = '')
    {
        $capitalizedKey = self::capitalize($key);
        $length = self::$data[$key]['length'] ?? [];

        return self::$response = [
            'status' => 'error',
            'response' => [
                'title' => 'Invalid ' . $capitalizedKey,
                'message' => match ($type) {
                    'text' => match ($reason) {
                        'pattern' => $capitalizedKey . ' is of the wrong format.',
                        'length' => $capitalizedKey . ' must be between ' . $length['min'] . ' and ' . $length['max'] . ', inclusively.'
                    },
                    'email' => $capitalizedKey . ' Address is of the wrong format.',
                    'select' => $capitalizedKey . ' cannot be empty.',
                    'number' => $capitalizedKey . ' must be between ' . $length['min'] . ' and ' . $length['max'] . ', inclusively.'
                },
            ],
            'input-id' => $key
        ];
    }

    private static function capitalize(string $string)
    {
        if (preg_match('#[-]#', $string)) {
            return join(' ', array_map(
                fn($part) => ucfirst($part),
                explode('-', $string)
            ));
        }

        return ucfirst($string);
    }
}

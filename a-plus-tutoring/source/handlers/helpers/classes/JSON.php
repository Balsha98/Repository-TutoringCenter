<?php

namespace Source\Handlers\Helpers\Classes;

class JSON
{
    public static function encode(mixed $value)
    {
        return json_encode($value);
    }

    public static function decode(string $json, bool $isAssoc = true)
    {
        return json_decode($json, $isAssoc);
    }
}

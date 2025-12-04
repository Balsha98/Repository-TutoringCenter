<?php

namespace Source\Handlers\Helpers\Classes;

class TextFormat
{
    public static function capitalizePartsOfString(string $separator, string $string)
    {
        if (preg_match('#[' . $separator . ']#', $string)) {
            return implode(' ', array_map(
                fn($part) => ucfirst($part),
                explode($separator, $string)
            ));
        }

        return ucfirst($string);
    }
}

<?php

class Validator
{
    public static function validateStringLength($value, $min = 1, $max = 100)
    {
        $length = strlen(trim($value));

        return $length >= $min && $length <= $max;
    }

    public static function validateEmail($value)
    {
        return  filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
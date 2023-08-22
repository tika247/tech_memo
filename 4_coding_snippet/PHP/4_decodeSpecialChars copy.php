<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Decode special charactors
 * @example get back a encoded string (e.g. Session Data) to the original form
 */
class DecodeSpecialChars
{
    /**
     * init
     * @param string $value
     * @return string
     */
    public static function init(string $value): string
    {
        return htmlspecialchars_decode($value);
    }
}

<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Encode special charactors
 * @example encode a decoded string (e.g. Session Data) so that machine can understand
 */
class EncodeSpecialChars
{
    /**
     * init
     * @param string $value
     * @return string
     */
    public static function init(string $value): string
    {
        return htmlspecialchars($value);
    }
}

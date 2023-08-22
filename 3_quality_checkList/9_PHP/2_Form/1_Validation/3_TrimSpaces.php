<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Trim spaces and return tirimmed string
 * Note: trim() does not include zenkaku-string as a target
 */
class TrimSpaces
{
    /**
     * init
     * @param string $value
     * @return string
     */
    public static function init(string $value): string
    {
        return preg_replace("/(^\s+)|(\s+$)/u", "", $value);
    }
}

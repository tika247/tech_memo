<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Check if a string is empty
 */
class CheckStrEmpty
{
    /**
     * init
     * @param string $str
     * @return boolean if not empty, return true
     */
    public static function init(string $str)
    {
        return strlen($str) !== 0;
    }
}

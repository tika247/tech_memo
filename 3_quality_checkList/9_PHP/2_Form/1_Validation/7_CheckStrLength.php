<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * check if a string is not over or under a specific length (to check maxLength and minLength)
 */
class CheckStrLength
{
    /**
     * init
     * @param string $str
     * @param number $length
     * @param boolean $checkMin compare with less-than-sign(<)
     * @return boolean
     */
    public static function init(string $str, integer $length, bool $checkMin = false): boolean
    {
        $strLen = strlen($str);
        return $checkMin ? $strLen < $num : $strLen > $num;
    }
}

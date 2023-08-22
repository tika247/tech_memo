<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Remove control code
 */
class RemoveControlCode
{
    /**
     * init
     * @param string $str
     * @param boolean $withLineFeed line-feed-code is alse included as a target or not
     * @example an argument must be applied for DisableHTMLTag
     * @return string
     */
    public static function init(string $str, $withLineFeed): ?string
    {
        $controlCharacters = $withLineFeed ? '/[\x00-\x1F\x7F\t]/' : '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F\t]/';

        return preg_replace($controlCharacters, '', $str);
    }
}

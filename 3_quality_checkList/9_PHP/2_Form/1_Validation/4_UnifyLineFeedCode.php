<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Unify line-feed-code with LF
 */
class UnifyLineFeedCode
{
    /**
     * init
     * @param string $str
     * @example an argument must be applied for DisableHTMLTag
     * @return string
     */
    public static function init(string $str): ?string
    {
        return str_replace(array("\r\n","\r"), "\n", $str);
    }
}

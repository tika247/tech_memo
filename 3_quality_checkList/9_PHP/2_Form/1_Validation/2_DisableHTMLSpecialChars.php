<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Disable HTML tag
 */
class DisableHTMLSpecialChars
{
    /**
     * init
     * @param string $str
     * @return string
     */
    public static function init(string $str): string
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
}

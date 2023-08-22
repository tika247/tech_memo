<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Check if Method is POST
 */
class CheckMethodIsPOST
{
    /**
     * init
     * @return boolean
     */
    public static function init()
    {
        return $_SERVER["REQUEST_METHOD"] === "POST";
    }
}

<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Check if a mail address is valid
 */
class CheckValidMailAddress
{
    /**
     * init
     * @return boolean if a address is valid, return true
     */
    public static function init($address)
    {
        return filter_var($address, FILTER_VALIDATE_EMAIL);
    }
}

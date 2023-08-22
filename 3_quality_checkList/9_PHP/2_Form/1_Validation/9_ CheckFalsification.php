<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Check Falsification (e.g. for select options)
 */
class CheckFalsification
{
    /**
     * init
     * @param array $target - an array as a checking target
     * @param array $prePrepared - a pre-prepared array to compare with $target
     * @return boolean if no falsification (no problem), return true
     */
    public static function init(array $target, array $prePrepared)
    {
        return in_array($target, ["", ...$prePrepared], true);
    }
}

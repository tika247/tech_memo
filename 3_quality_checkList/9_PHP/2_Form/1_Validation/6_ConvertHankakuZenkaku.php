<?php

declare(strict_types=1);

namespace src\model\Classes;

/**
 * Convert hankaku zenkaku
 */
class ConvertHankakuZenkaku
{
    /**
     * init
     * @param string $str
     * @param string $opt
     * @link https://www.php.net/manual/ja/function.mb-convert-kana.php
     * @return string
     */
    public static function init(string $str, string $opt): string
    {
        return mb_convert_kana($str, $opt);
    }
}

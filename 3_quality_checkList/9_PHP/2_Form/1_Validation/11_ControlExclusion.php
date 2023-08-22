<?php

/**
 * 排他制御とは
 * サーバ上のファイルへの読み書き操作やデータベースの更新など、リソースに対して複数のユーザから同時に処理が行われると結果の不整合及び、エラーが発生する可能性のある場合に、先に行われた処理が完了するまで次の処理を待ち状態にすることや処理を意図的に失敗させる仕組みのこと
 */

declare(strict_types=1);

namespace src\model\Classes;

/**
 * MakeCSVFile (排他制御)
 * @link https://www.php.net/manual/ja/function.flock.php
 */
class MakeCSVFile
{
    public function __construct()
    {
        $this->csvFileDir = $ROOT . "/src/csv/";
        $this->csvFilePath = $this->csvFileDir . "file.csv";
        $this->header = array(
            0 => "お問い合わせ製品",
            1 => "お問い合わせ内容",
            2 => "氏名",
            3 => "ふりがな",
            4 => "会社名",
            5 => "部署名",
            6 => "ご連絡先住所",
            7 => "電話番号",
            8 => "FAX番号",
            9 => "メールアドレス"
          );
        $this->body = array(
            0 => "定温物流関連製品",
            1 => "テスト",
            2 => "仁科 崇弘",
            3 => "にしな たかひろ",
            4 => "テスト",
            5 => "テスト",
            6 => "テスト",
            7 => "000-000-000",
            8 => "000-000-000",
            9 => "qas@i.mitsue.co.jp"
          );
    }
    /**
     * init
     * @return
     */
    public static function init()
    {
        $fp = fopen($this->csvFilePath, "w+");
        $header = $this->encodeToSJIS($this->header);
        $body = $this->encodeToSJIS($this->body);

        flock($fp, LOCK_EX); // lock
        fputcsv($fp, $header);
        fputcsv($fp, $body);
        rewind($fp);
        flock($fp, LOCK_UN); // unlock

        fclose($fp);
    }
}
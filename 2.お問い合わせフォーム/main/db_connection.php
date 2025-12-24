<?php

const DB_HOST = 'mysql:dbname=phptolaravel;host=127.0.0.1; charset=utf8';
const DB_USER = 'php_to_laravel';
const DB_PASSWORD = '2315linda';

//例外処理

try {
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //返ってくる値を連想配列で取得
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //エラーを例外として扱う
        PDO::ATTR_EMULATE_PREPARES => false, //SQLインジェクション対策
    ]);
    echo '接続成功';
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMessage() . "\n";
    exit();
}

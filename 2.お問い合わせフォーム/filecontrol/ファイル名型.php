<?php

/*
PHPのファイル操作
1.テキストファイルで保存：
2.データベースで保存：SQL

今回は1で確認：

ファイル名型：
file_get_contents, file_put_contents

ストリーム型：
fopen, fclose, fgets, fwrite

オブジェクト型:
SplFileObject

*/

//ファイル名型：
// ファイル読み込み：
$contactFile = '.contact.dat';
$fileContents = file_get_contents($contactFile);
// echo $fileContents;
// .contact.datの内容が表示される

// ファイル書き込み（上書き）：
// file_put_contents($contactFile, 'test');
// ページには表示されないが、,contact.dat内の文字列がtestに変わる

// ファイル書き込み（追加）：
// file_put_contents($contactFile, 'test', FILE_APPEND);
// ページには表示されないが、,contact.dat内の文字列末尾にtestが追加される

// 改行して追記したい場合
// $addString = "test"."\n";
// file_put_contents($contactFile, $addString, FILE_APPEND);

//コンマで区切られた内容を配列に変換して表示：
$allData = file($contactFile);

foreach($allData as $lineData){
    $lines = explode(',',$lineData);
    echo $lines[0]. '<br>';
    echo $lines[1]. '<br>';
    echo $lines[2]. '<br>';
}
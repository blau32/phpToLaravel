<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require '読み込み確認用.php';
echo $message1;
echo '<br>';
echo 'これはrequireのメッセージです';
echo '<br>';
// 読み込み失敗するとエラーメッセージを表示（プログラム中断）ため、これはrequireのメッセージです は表示されない

include '読み込み確認用.php';
echo $message1;
echo '<br>';
echo 'これはincludeのメッセージです';
echo '<br>';
// 読み込み失敗すると警告のみ表示（プログラムの実行は継続されるため、これはincludeのメッセージです は表示される

require 'ファイル読み込み用フォルダ/別階層のファイル.php';
echo $message2;
echo '<br>';

echo __DIR__;
echo '<br>';
// __DIR__は現在のファイルのディレクトリを返す

require __DIR__ .'/ファイル読み込み用フォルダ/別階層のファイル.php';
echo $message2;
echo '<br>';

echo __FILE__;
echo '<br>';
// __FILE__は現在のファイルのパスを返す

?>

</body>
</html>

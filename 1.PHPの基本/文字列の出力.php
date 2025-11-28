<?php
// PHPの基本
// 書き方と文字列の出力

// PHPの書き方
/*
<?php 
    ここにコードを書く
?>
*/

/*
HTML内にPHPを書くことができる。（基本的にはこっち）
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPの基本</title>
</head>
<body>
    <?php
    PHPのコード
    ?>
    <h1>PHPの基本</h1>
</body>
</html>

注意としてHTMLの組み合わせる場合は棲み分けの為<?PHP?>で囲むこと
*/

// 利用しているPHPのバージョンを表示
// phpinfo();

// 文字列の出力
echo 'Hello, World!';
echo '<br>'; //改行
echo ('Hello, World!'); //この場合はかっこの有無を問わない
echo '<br>'; //改行
echo "Hello, World!" . "<br>";
echo ("Hello, World!" . "<br>");

//シングルクォーテーションとダブルクォーテーションの違い
// 1.変数の解釈
// シングルクォーテーションは変数を解釈しない
$name = 'John';
echo 'こんにちは、$name さん';
echo '<br>';
// ダブルクォーテーションでは解釈する
$name = "John";
echo "こんにちは、$name さん";
echo '<br>';

//2.エスケープシーケンスの扱い
// シングルクォート → 文字として扱われる
echo 'A\nB';
echo '<br>';
// ダブルクォート → 解釈される
echo "A\nB";

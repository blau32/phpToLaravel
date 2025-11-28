<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //変数
    $name = 'John';
    echo "こんにちは、$name さん";
    echo "<br>";

    //書き換え
    $name = 'Jane';
    echo "こんにちは、$name さん";
    echo "<br>";

    //属性の確認方法
    $number = 10;
    var_dump($number);
    echo '<br>';

    $string = 'Hello, World!';
    var_dump($string);
    echo '<br>';

    $boolean = true;
    var_dump($boolean);
    echo '<br>';

    $array = [1, 2, 3, 4, 5];
    var_dump($array);
    echo '<br>';

    $object = new stdClass();
    var_dump($object);
    echo '<br>';

    /*その他ルール：
    - 変数名は、小文字の英字から始まり、小文字の英字、数字、アンダースコア(_)のみ使用できる。
    - 大文字の英字から始まることはできない。
    - 予約語（PHPのキーワード）を使用することはできない。
    */

    
    //定数
    // 公式など基本的には中身が変わらないものを入れることが多い
    const PI = 3.14;


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 演算子一覧

    echo '<h2>1. 算術演算子</h2>';
    $a = 10;
    $b = 3;

    echo '$a = 10, $b = 3 の場合<br>';
    echo '$a + $b = ' . ($a + $b) . ' // 加算<br>';
    echo '$a - $b = ' . ($a - $b) . ' // 減算<br>';
    echo '$a * $b = ' . ($a * $b) . ' // 乗算<br>';
    echo '$a / $b = ' . ($a / $b) . ' // 除算<br>';
    echo '$a % $b = ' . ($a % $b) . ' // 剰余（余り）<br>';
    echo '$a ** $b = ' . ($a ** $b) . ' // べき乗（PHP 5.6以降）<br>';
    echo '<br>';

    echo '<h2>2. 代入演算子</h2>';
    $x = 10;
    echo '$x = 10<br>';

    $x += 5;  // $x = $x + 5 と同じ
    echo '$x += 5 → $x = ' . $x . '<br>';

    $x -= 3;  // $x = $x - 3 と同じ
    echo '$x -= 3 → $x = ' . $x . '<br>';

    $x *= 2;  // $x = $x * 2 と同じ
    echo '$x *= 2 → $x = ' . $x . '<br>';

    $x /= 4;  // $x = $x / 4 と同じ
    echo '$x /= 4 → $x = ' . $x . '<br>';

    $x %= 3;  // $x = $x % 3 と同じ
    echo '$x %= 3 → $x = ' . $x . '<br>';

    $x = 10;
    $x **= 2;  // $x = $x ** 2 と同じ
    echo '$x **= 2 → $x = ' . $x . '<br>';
    echo '<br>';

    echo '<h2>3. 比較演算子</h2>';
    $num1 = 10;
    $num2 = 5;
    $num3 = 10;

    echo '$num1 = 10, $num2 = 5, $num3 = 10 の場合<br>';
    var_dump($num1 == $num3);
    echo ' // == 等しい（値のみ比較）<br>';
    var_dump($num1 === $num3);
    echo ' // === 等しい（値と型の両方を比較）<br>';
    var_dump($num1 != $num2);
    echo ' // != 等しくない<br>';
    var_dump($num1 <> $num2);
    echo ' // <> 等しくない（!=と同じ）<br>';
    var_dump($num1 !== $num2);
    echo ' // !== 等しくない（値と型の両方を比較）<br>';
    var_dump($num1 > $num2);
    echo ' // > より大きい<br>';
    var_dump($num1 < $num2);
    echo ' // < より小さい<br>';
    var_dump($num1 >= $num3);
    echo ' // >= 以上<br>';
    var_dump($num1 <= $num2);
    echo ' // <= 以下<br>';
    echo '<br>';

    echo '<h2>4. 論理演算子</h2>';
    $bool1 = true;
    $bool2 = false;

    echo '$bool1 = true, $bool2 = false の場合<br>';
    var_dump($bool1 && $bool2);
    echo ' // && AND（両方がtrue）<br>';
    var_dump($bool1 || $bool2);
    echo ' // || OR（どちらかがtrue）<br>';
    var_dump(!$bool1);
    echo ' // ! NOT（否定）<br>';
    var_dump($bool1 and $bool2);
    echo ' // and AND（&&と同じ、優先度が低い）<br>';
    var_dump($bool1 or $bool2);
    echo ' // or OR（||と同じ、優先度が低い）<br>';
    var_dump($bool1 xor $bool2);
    echo ' // xor XOR（排他的論理和）<br>';
    echo '<br>';

    echo '<h2>5. インクリメント・デクリメント演算子</h2>';
    $count = 5;
    echo '$count = 5 の場合<br>';

    echo '$count++ = ' . $count++ . ' // 後置インクリメント（使用後に+1）<br>';
    echo '現在の$count = ' . $count . '<br>';

    echo '++$count = ' . ++$count . ' // 前置インクリメント（使用前に+1）<br>';
    echo '現在の$count = ' . $count . '<br>';

    echo '$count-- = ' . $count-- . ' // 後置デクリメント（使用後に-1）<br>';
    echo '現在の$count = ' . $count . '<br>';

    echo '--$count = ' . --$count . ' // 前置デクリメント（使用前に-1）<br>';
    echo '現在の$count = ' . $count . '<br>';
    echo '<br>';

    echo '<h2>6. 文字列演算子</h2>';
    $str1 = 'Hello';
    $str2 = 'World';

    echo '$str1 = "Hello", $str2 = "World" の場合<br>';
    echo '$str1 . $str2 = ' . ($str1 . $str2) . ' // . 文字列の連結<br>';
    echo '$str1 . " " . $str2 = ' . ($str1 . " " . $str2) . '<br>';

    $str1 .= ' PHP';  // $str1 = $str1 . ' PHP' と同じ
    echo '$str1 .= " PHP" → $str1 = ' . $str1 . '<br>';
    echo '<br>';

    echo '<h2>7. 配列演算子</h2>';
    $arr1 = ['a' => 1, 'b' => 2];
    $arr2 = ['c' => 3, 'd' => 4];
    $arr3 = ['a' => 1, 'b' => 2];

    echo '<pre>';
    echo '$arr1 = ';
    print_r($arr1);
    echo '$arr2 = ';
    print_r($arr2);
    echo '$arr3 = ';
    print_r($arr3);
    echo '</pre>';

    $merged = $arr1 + $arr2;  // 配列の結合（左側のキーを優先）
    echo '<pre>$arr1 + $arr2 = ';
    print_r($merged);
    echo '</pre>';

    var_dump($arr1 == $arr3);
    echo ' // == 配列が等しい（キーと値）<br>';
    var_dump($arr1 === $arr3);
    echo ' // === 配列が等しい（キー、値、型、順序）<br>';
    var_dump($arr1 != $arr2);
    echo ' // != 配列が等しくない<br>';
    var_dump($arr1 <> $arr2);
    echo ' // <> 配列が等しくない<br>';
    var_dump($arr1 !== $arr2);
    echo ' // !== 配列が等しくない（型も含む）<br>';
    echo '<br>';

    echo '<h2>8. 三項演算子（条件演算子）</h2>';
    $age = 20;
    $result = ($age >= 18) ? '成人' : '未成年';
    echo '$age = 20 の場合<br>';
    echo '($age >= 18) ? "成人" : "未成年" = ' . $result . '<br>';

    // null合体演算子（PHP 7.0以降）
    $name = null;
    $displayName = $name ?? 'ゲスト';
    echo '$name = null の場合<br>';
    echo '$name ?? "ゲスト" = ' . $displayName . ' // ?? null合体演算子<br>';

    $name = '太郎';
    $displayName = $name ?? 'ゲスト';
    echo '$name = "太郎" の場合<br>';
    echo '$name ?? "ゲスト" = ' . $displayName . '<br>';
    echo '<br>';

    echo '<h2>9. 型演算子</h2>';
    class MyClass {}
    $obj = new MyClass();

    var_dump($obj instanceof MyClass);
    echo ' // instanceof オブジェクトが特定のクラスのインスタンスか<br>';
    var_dump($obj instanceof stdClass);
    echo ' // instanceof 別のクラスの場合はfalse<br>';
    echo '<br>';

    echo '<h2>10. エラー制御演算子</h2>';
    echo '@演算子を使用すると、エラーを抑制できます（非推奨）<br>';
    // @file_get_contents('存在しないファイル.txt');  // エラーが抑制される
    echo '<br>';

    echo '<h2>11. 実行演算子</h2>';
    $output = `dir`;  // バッククォートでシェルコマンドを実行（Windowsの場合）
    echo '`dir` の結果（最初の50文字）: ' . substr($output, 0, 50) . '...<br>';
    echo '<br>';

    ?>
</body>

</html>
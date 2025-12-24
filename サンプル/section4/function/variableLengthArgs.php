<?php
//可変引数
function combine(string ...$name): string
// : stringは戻り値の型宣言
// ...$nameは可変引数
{
    $combinedName = '';
    for($i = 0; $i < count($name); $i++) {
        $combinedName .= $name[$i];
        if($i != count($name) - 1) {
            $combinedName .= '・';
        }
    }
    return $combinedName;
}

$lName = '名前';
$fName = '苗字';
$name1 = combine($fName, $lName);

echo '結合結果: '. $name1 ;
echo '<br>';

$variableLength = combine('オビ', 'ワン', 'ケノービ');
echo $variableLength;
echo '<br>';
function sum(int ...$numbers): int
// function sum(int $numbers): int //こっちだとエラーになる
// ...$numbersは可変引数であり、格納された値を配列として扱う
{
    return array_sum($numbers);
}

echo sum(1, 2);           // 3
echo '<br>';
echo sum(1, 2, 3);        // 6
echo '<br>';
echo sum(10, 20, 30, 40); // 100
echo '<br>';
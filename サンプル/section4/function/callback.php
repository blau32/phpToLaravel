<?php
function combineSpace(string $firstName, string $lastName): string
{
    return $firstName . ' ' . $lastName;
}

$nameParam = ['jane', 'doe'];

// コールバック関数 (引数に関数を入れる)
function useCombine(array $name, callable $func)
// callableは関数を引数に取ることができる
{
    $concatName = $func(...$name);
    // ...はスプレッドで配列の値を分解している
    // 可変引数ではないので注意
    print($func.'関数での結合結果: ' . $concatName . '<br>');
}

// combineSpaceは関数名を文字列で指定している
useCombine($nameParam, 'combineSpace');


<?php

declare(strict_types=1); //強い型指定

ini_set("display_errors", 1);
error_reporting(E_ALL);


echo 'タイプヒンティングテスト' .'<br>';
/**
 * @param $string
 */
function noTypeHint($string)
{
    var_dump($string);
}

noTypeHint(['テスト']); // 引数string予定に 配列-> エラーはでない
echo '<br>';

// タイプヒンティング (引数に型を指定。型が違うとエラー)
function typeTest(string $string) // 引数stringの他に、array, callable, bool, float, int, object, クラス名、インターフェース名
{
    var_dump($string);
}

typeTest('this is string');
echo '<br>';
// typeTest(['this is array']);
// 引数にstringと指定しているのに配列->こちらはエラー

// 型ヒンティングを使用して、引数に型を指定する
//declare(strict_types=1); を宣言していない場合、下記コードにエラーが発生しない
//要は文字列を加算しているがPHPが勝手に型を変換してくれるため
//最初にdeclare(strict_types=1); を宣言しておけば、エラーが発生する
function adding(int $int1, int $int2){
    return $int1 + $int2;
}
echo adding(1,2);
echo '<br>';

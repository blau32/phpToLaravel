<?php

$postalCode = '123-4567';

function checkPostalCode($str){
    $replaced = str_replace('-','',$str);
    $length = strlen($replaced);

    if($length === 7){
        return true;
    } else {
        return false;
    }
}

var_dump(checkPostalCode($postalCode));
echo '<br>';

/*
str_replace
検索文字列に一致したすべての文字列を置換する
strlen
*/

/*
スコープ
関数が参照できる変数などの範囲
*/

// グローバル変数：関数外で定義される変数
$global = 'This is global valiable';

//関数内で定義＋関数内で参照
function checkScope1(){
    // ローカル変数：関数内で定義される変数
    $local = 'This is local valiable';
    echo $local;
    echo '<br>';
}
checkScope1();

//関数外で定義＋関数内で参照
// function checkScope2(){
//     echo $global;
//     echo '<br>';
// }
// checkScope2();

//Warning: Undefined variable $global in C:\xampp\htdocs\phpToLaravel\関数とスコープ.php on line 43と表示される
//つまりスコープ外の為参照できない

// 関数外でglobal...と定義＋関数内で参照
function checkScope3(){
    global $global;
    echo $global;
    echo '<br>';
}
checkScope3();
// globalと関数内で宣言すれば呼び出せるが基本使われない

// 関数内で定義＋関数外で呼び出す
function checkScope4(){
    $local = 'This is local valiable';
}
echo $local;

// Warning: Undefined variable $local in C:\xampp\htdocs\phpToLaravel\関数とスコープ.php on line 64と表示される
// つまりスコープ外の為参照できない

/*
基本的には関数内で定義したなら関数内で呼び出し、
関数外で定義したならは関数外で呼び出すようにする
メソッドの継承関連などの例外もありなので注意
*/
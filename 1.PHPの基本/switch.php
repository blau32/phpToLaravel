<?php
/*
switch文を使って繰り返し処理を行う...があまり使われない
== で値を比較しているため
*/

$data1 = '2';
switch($data1){
    case 1:
        echo '1です';
        break;
    case 2:
        echo '2です';
        break;
    default:
        echo '1でも2でもありません';
        break;
}
echo '<br>';
// "2"と2を区別できないため、下記のように記載する

$data2 = "2";
switch($data2 === 2){
    case 1:
        echo '1です';
        break;
    case 2:
        echo '2です';
        break;
    default:
        echo '1でも2でもありません';
        break;
}
echo '<br>';
//だがifを使った方が簡単なので基本的には使われない
<?php
// DB接続 PDO
function insertContact($request){
// $requestは$_POSTの値が入っている

require 'db_connection.php';
// データベース設定ファイルを読み込む

//データの入力・保存 連想配列
// キーは文字列でデータベースのカラムと一致
// 値は$requestの値が入っている
// つまり$＿POST['your_name'],
$params = [
    'id' => null, //idは自動で生成されるのでnull
    'your_name' => $request['your_name'],
    'email' => $request['email'],
    'url' => $request['url'],
    'gender' => $request['gender'], //0 or 1
    'age' => $request['age'], //1~6
    'contact' => $request['contact'], //200文字以内
    'created_at' => null //現在の日時
];

$count = 0;
$columns = '';
$values = '';

foreach(array_keys($params) as $key){
    if($count++ > 0){
        $columns .= ',';
        $values .= ',';
    }
    $columns .= $key;
    $values .= ':'. $key;
}

$sql = 'insert into contacts ('. $columns .')values('. $values .') ';

echo '<pre>';
var_dump($sql);
echo '</pre>';

// $stmt = $pdo->prepare($sql); //送信準備
// $stmt->execute($params); //送信

}

?>
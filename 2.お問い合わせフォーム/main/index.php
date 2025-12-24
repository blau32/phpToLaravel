<?php

require 'db_connection.php';

//ユーザー入力なし

// $sql = 'select * from contacts where id = 4';
// contactsテーブルのidが4のデータを取得という動きを変数$sqlに格納

// $stmt = $pdo->query($sql);
//-> とはメソッドチェーンという技術。メソッドをメソッドに繋げることができる。
//query(); とはSQLをそのまま実行する命令

// $result = $stmt->fetchall();
//fetchAll(); とはSQLの実行結果を「全部」配列で取得

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

// ユーザー入力あり 悪意のある入力から守るためにプリペアードステートメント利用
$sql = 'select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
//$pdo が持っている prepare というPDOクラスに最初から用意されている“メソッド”
//SQLを 「未完成のまま」DBに送る
$stmt->bindValue(':id', 5, PDO::PARAM_INT);
//bindValue(); とはSQLの中の変数に値を代入する命令
$stmt->execute();
//execute(); とはSQLを実行する命令

// $result = $stmt->fetch();
$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクション処理

$pdo->beginTransaction(); //トランザクション開始$pdo->beginTransaction();

try{
    $stmt = $pdo->prepare($sql); //プリペアードステートメントを使ってSQLを実行
    $stmt->bindValue(':id', 5, PDO::PARAM_INT); //SQLの中の変数に値を代入
    $stmt->execute(); //SQLを実行

    $pdo->commit(); //更新の確定

}catch(PDOException $e){
    $pdo->rollBack(); //更新のキャンセル
}

?>
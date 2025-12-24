<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo 'session destroyed';
    echo '<br>';

    $_SESSION = [];

    if(isset($_COOKIE['PHPSESSID'])){
        setcookie('PHPSESSID', '', time() - 1800, '/');
        //setcookieはクッキーを削除する関数
        //time() - 1800は1800秒前の時間を指定
        ///は全てのパスでクッキーが有効
    }

    session_destroy();

    echo 'session';
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

    echo 'cookie';
    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';

    ?>
</body>
</html>
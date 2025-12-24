<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessiontest1</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['visited'])) {
        echo 'first visit';

        $_SESSION['visited'] = 1;
        $_SESSION['date'] = date('c');
        // date()は日時を文字列に変換する関数
        // cはISO 8601形式の日時を返す

    } else {

        $visited = $_SESSION['visited'];
        $visited++;
        $_SESSION['visited'] = $visited;

        echo $_SESSION['visited'] . ' time(s) visit<br>';

        if (isset($_SESSION['date'])) {
            echo 'last visit was on ' . $_SESSION['date'];
            $_SESSION['date'] = date('c');
        }


        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';

        echo '<pre>';
        var_dump($_COOKIE);
        echo '</pre>';
    }
    ?>
</body>

</html>
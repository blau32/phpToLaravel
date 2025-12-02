<?php
if (!empty($_GET)) {
    // echo $_GET['your_name'];
    // フォームに入力された文字列が出力される
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
    // 上記に加えてデータ型が表示される
}
// これでも取得できる；；
// スーパーグローバル変数
//　連想配列
$pageFlag = 0;

if(!empty($_POST['btn_confirm'])){
    $pageFlag = 1;
}

if(!empty($_POST['btn_submit'])){
    $pageFlag = 2;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php if ($pageFlag == 1): ?>
        <form method="POST" action="input.php">
            name
            <?php echo $_POST['your_name']; ?>
            <br>
            mail address
            <?php echo $_POST['email']; ?>
            <br>
            <input type="submit" name='btn_submit' value="check">
            <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        </form>
    <?php endif; ?>

    <?php if ($pageFlag == 2): ?>
        sent
    <?php endif; ?>

    <?php if ($pageFlag == 0): ?>
        <form method="GET" action="input.php">
            name
            <input type="text" name="your_name">
            <br>
            mail address
            <input type='email' name="email">
            <br>
            <input type="submit" name='btn_confirm' value="check">
        </form>
    <?php endif; ?>


</body>

</html>
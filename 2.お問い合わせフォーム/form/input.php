<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- フォームに入力された文字列が出力されるようにしたい -->

    <?php
    if (!empty($_POST)) {
        // echo $_GET['your_name'];
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
    }
    // 典型的な３つの確認画面：input confirm, end

    //0なら入力画面
    $pageFlag = 0;

    // $_POSTにbtn_confirmがあれば1ページ目に遷移
    if (!empty($_POST['btn_confirm'])) {
        $pageFlag = 1;
    }

    // $_POSTにbtn_submitがあれば2ページ目に遷移
    if (!empty($_POST['btn_submit'])) {
        $pageFlag = 2;
    }
    ?>

    <?php if ($pageFlag == 0): ?>
        <form method="POST" action="input.php">
            name
            <input type="text" name="your_name" value="<?php if(!empty($_POST['your_name']))echo $_POST['your_name']; ?>">
            <!-- checkボタンを入力して始めてPOSTに値が格納されるため、初回は空の状態。そのため、if(!empty())で値があれば出力するようにする -->
            <br>
            mail address
            <input type='email' name="email" value="<?php if(!empty($_POST['email']))echo $_POST['email']; ?>">
            <br>
            <input type="submit" name='btn_confirm' value="check">
        </form>
    <?php endif; ?>

    <?php if ($pageFlag == 1): ?>
        <form method="POST" action="input.php">
            name:
            <?php echo $_POST['your_name']; ?>
            <br>
            mail address:
            <?php echo $_POST['email']; ?>
            <br>
            <input type="submit" name="back" value="back">
            <input type="submit" name='btn_submit' value="send">
            <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        </form>
    <?php endif; ?>

    <!-- hidden input を使う理由として、ブラウザを切り替えるとその時点でPOSTされた値が消えてしまうため、hidden input を使って値を保持する
    -->

    <?php if ($pageFlag == 2): ?>
        successfully sent
    <?php endif; ?>




</body>

</html>
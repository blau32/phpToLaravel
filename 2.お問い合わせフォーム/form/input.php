    <!-- フォームに入力された文字列が出力されるようにしたい -->

    <?php

    session_start();
    // csrf対策に必要な$_SESSIONを使用するため必要。

    // バリデーション用/エラーメッセージ用のファイルを読み込む
    require 'validation.php';

    header('X-Frame-Options: DENY');
    // クリックジャッキング対策（他サイトのiframeで表示させない）

    if (!empty($_POST)) {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
    }

    // if (!empty($_SESSION)) {
    //     echo '<pre>';
    //     var_dump($_SESSION);
    //     echo '</pre>';
    // }

    // XSS対策
    // htmlspecialcharsという関数で特殊文字を無力化
    // 各echoで表示する値をh()で囲む
    function h($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }

    // 典型的な３つの確認画面：input confirm, end

    //0なら入力画面
    $pageFlag = 0;

    // バリデーション用の関数を呼び出し、エラーメッセージを取得
    $errors = validation($_POST);

    // $_POSTにbtn_confirmがあれば1ページ目に遷移
    if (!empty($_POST['btn_confirm']) && empty($errors)) {
        $pageFlag = 1;
    }

    // $_POSTにbtn_submitがあれば2ページ目に遷移
    if (!empty($_POST['btn_submit'])) {
        $pageFlag = 2;
    }

    // $_POSTにbackがあれば0ページ目（入力画面）に戻る
    if (!empty($_POST['back'])) {
        $pageFlag = 0;
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

        <?php if ($pageFlag === 0): ?>

            <?php
            if (!isset($_SESSION['csrfToken'])) {
                $csrfToken = bin2hex(random_bytes(32));
                $_SESSION['csrfToken'] = $csrfToken;
            }
            $token = $_SESSION['csrfToken'];
            ?>

            <?php if (!empty($errors) && !empty($_POST['btn_confirm'])): ?>
                <?php echo '<ul>'; ?>
                <?php
                foreach ($errors as $error) {
                    echo '<li>' . $error . '</li>';
                }
                ?>
                <?php echo '</ul>'; ?>
            <?php endif; ?>

            <form method="POST" action="input.php">
                name
                <input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) echo h($_POST['your_name']); ?>">
                <!-- checkボタンを入力して始めてPOSTに値が格納されるため、初回は空の状態。そのため、if(!empty())で値があれば出力するようにする -->
                <br>
                mail address
                <input type='email' name="email" value="<?php if (!empty($_POST['email'])) echo h($_POST['email']); ?>">
                <br>
                home
                <input type='url' name="url" value="<?php if (!empty($_POST['url'])) echo h($_POST['url']); ?>">
                <br>
                gender
                <input type='radio' name="gender" value="0"
                    <?php if (isset($_POST['gender']) && $_POST['gender'] === '0') {
                        echo 'checked';
                    } ?>>male
                <input type='radio' name="gender" value="1"
                    <?php if (isset($_POST['gender']) && $_POST['gender'] === '1') {
                        echo 'checked';
                    } ?>>female
                <!-- 値の保持：isset($_POST['gender'])の部分でまずキーが存在するかチチェックし&& $_POST['gender'] === '1')で値を確認する -->
                <br>
                age
                <select name="age">
                    <option value="">choose your age</option>
                    <option value="1" selected>~19</option>
                    <option value="2">20~29</option>
                    <option value="3">30~39</option>
                    <option value="4">40~49</option>
                    <option value="5">50~59</option>
                    <option value="6">60~</option>
                </select>
                <br>
                contact
                <textarea name="contact"><?php if (!empty($_POST['contact'])) echo h($_POST['contact']); ?></textarea>
                <!-- textareaではスペースが入ってしまうので、改行やスペースを空けずにtextareaで囲む -->
                <br>
                <input type='checkbox' name="caution" value="1">checked caution
                <br>
                <input type="submit" name='btn_confirm' value="check">

                <input type="hidden" name="csrf" value="<?php echo $token; ?>">
            </form>
        <?php endif; ?>

        <?php if ($pageFlag == 1): ?>
            <?php if (($_POST['csrf']) === $_SESSION['csrfToken']): ?>
                <form method="POST" action="input.php">
                    name:
                    <?php echo h($_POST['your_name']); ?>
                    <br>
                    mail address:
                    <?php echo h($_POST['email']); ?>
                    <br>
                    home:
                    <?php echo h($_POST['url']); ?>
                    <br>
                    gender:
                    <?php
                    if ($_POST['gender'] === 0) {
                        echo 'male';
                    } else {
                        echo 'female';
                    }
                    ?>
                    <br>
                    age:
                    <?php
                    if ($_POST['age'] === 1) {
                        echo '~19';
                    } elseif ($_POST['age'] === 2) {
                        echo '20~29';
                    } elseif ($_POST['age'] === 3) {
                        echo '30~39';
                    } elseif ($_POST['age'] === 4) {
                        echo '40~49';
                    } elseif ($_POST['age'] === 5) {
                        echo '50~59';
                    } elseif ($_POST['age'] === 6) {
                        echo '60~';
                    }
                    ?>
                    <br>
                    contact:
                    <?php echo h($_POST['contact']); ?>
                    <br>
                    <input type="submit" name="back" value="back">
                    <input type="submit" name='btn_submit' value="send">
                    <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
                    <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
                    <input type="hidden" name="url" value="<?php echo h($_POST['url']); ?>">
                    <input type="hidden" name="gender" value="<?php echo h($_POST['gender']); ?>">
                    <input type="hidden" name="age" value="<?php echo h($_POST['age']); ?>">
                    <input type="hidden" name="contact" value="<?php echo h($_POST['contact']); ?>">
                    <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
                </form>
            <?php endif; ?>
        <?php endif; ?>

        <!-- hidden input ページを遷移すると、そのリクエストで送られたPOSTデータはもう使えないので、次のリクエストでも使いたい値は hidden で入れ直す
    -->

        <?php if ($pageFlag == 2): ?>
            <?php if ($_POST["csrf"] === $_SESSION['csrfToken']): ?>
                successfully sent
                <?php unset(
                    $_SESSION['csrfToken']
                ) ?>
            <?php endif; ?>
        <?php endif; ?>
    </body>

    </html>
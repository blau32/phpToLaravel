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
   <!-- bootstrap用のhead -->

   <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       <title>Hello, world!</title>
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

           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <form method="POST" action="input.php">
                           <div class="form-group">
                               <label for="your-name">name:</label>
                               <input type="text" class="form-control" id="your-name" name="your_name" value="<?php if (!empty($_POST['your_name'])) echo h($_POST['your_name']); ?>" required>
                           </div>
                           <!-- checkボタンを入力して始めてPOSTに値が格納されるため、初回は空の状態。そのため、if(!empty())で値があれば出力するようにする -->
                           <div class="form-group">
                               <label for="email">mail address:</label>
                               <input type="email" class="form-control" id="email" name="email" value="<?php if (!empty($_POST['email'])) echo h($_POST['email']); ?>" required>
                           </div>

                           <div class="form-group">
                               <label for="url">home:</label>
                               <input type="url" class="form-control" id="url" name="url" value="<?php if (!empty($_POST['url'])) echo h($_POST['url']); ?>" required>
                           </div>
                           gender
                           <div class="form-check form-check-inline">
                               <input type='radio' class="form-check-input" name="gender" id="gender1" value="0"
                                   <?php if (isset($_POST['gender']) && $_POST['gender'] === '0') {
                                        echo 'checked';
                                    } ?>>
                               <label class="form-check-label" for="gender1">male</label>
                               <input type='radio' class="form-check-input" name="gender" id="gender2" value="1"
                                   <?php if (isset($_POST['gender']) && $_POST['gender'] === '1') {
                                        echo 'checked';
                                    } ?>>
                               <label class="form-check-label" for="gender2">female</label>
                           </div>
                           <!-- 値の保持：isset($_POST['gender'])の部分でまずキーが存在するかチチェックし&& $_POST['gender'] === '1')で値を確認する -->
                           <div class="form-group">
                               <label for="age">age</label>
                               <select class="form-control" id="age" name="age">
                                   <option value="">choose your age</option>
                                   <option value="1" selected>~19</option>
                                   <option value="2">20~29</option>
                                   <option value="3">30~39</option>
                                   <option value="4">40~49</option>
                                   <option value="5">50~59</option>
                                   <option value="6">60~</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="contact">contact</label>
                               <textarea class="form-control" id="contact" row="3" name="contact"><?php if (!empty($_POST['contact'])) echo h($_POST['contact']); ?></textarea>
                           </div>
                           <!-- textareaではスペースが入ってしまうので、改行やスペースを空けずにtextareaで囲む -->

                           <div class="form-check">
                               <input class="form-check-input" id="caution" type="checkbox" name='caution' value="1">
                               <label class="form-check-label" for="caution">I accept all </label>
                           </div>

                           <input class="btn btn-info" type="submit" name='btn_confirm' value="confirm">
                           <input type="hidden" name="csrf" value="<?php echo $token; ?>">
                       </form>
                   </div>
               </div>
           </div>
       <?php endif; ?>

       <!-- page1------------------------------------------------------ -->

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


       <!-- page2------------------------------------------------------ -->


       <?php if ($pageFlag == 2): ?>
           <?php if ($_POST["csrf"] === $_SESSION['csrfToken']): ?>

            <!-- DB接続 PDO -->
             <!-- このタイミングで保存 -->
            <?php require '../main/insert.php';
            insertContact($_POST);
            ?>
            <!-- insert.phpファイルのfunction insertContact($request)の$requestに$_POSTの値が入っている -->
               successfully sent
               <?php unset(
                    $_SESSION['csrfToken']
                ) ?>
           <?php endif; ?>
       <?php endif; ?>

       <!-- Bootstrap用の -->
       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>

   </html>
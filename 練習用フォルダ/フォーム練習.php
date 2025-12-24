<?php
// セキュリティ対策用の処理--- 
session_start();
require_once 'validation2.php';
header('X-Frame-Options: DENY');
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
$errors = validation2($_POST);
// --- 

//画面遷移設定--- 
$pageFlag = 0;
// $_POSTにconfirmがあれば1ページ目に遷移 
if (!empty($_POST['confirm']) && empty($errors)) {
    $pageFlag = 1;
}
// $_POSTにsubmitがあれば2ページ目に遷移 
if (!empty($_POST['submit']) && empty($errors)) {
    $pageFlag = 2;
} // $_POSTにbackがあれば0ページ目（入力画面）に戻る 
if (!empty($_POST['back'])) {
    $pageFlag = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- bootstrap用のhead -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>お問い合わせフォーム</title>
</head>

<body> <?php if ($pageFlag === 0): ?> <?php if (!isset($_SESSION['csrfToken'])) {
                                            $csrfToken = bin2hex(random_bytes(32));
                                            $_SESSION['csrfToken'] = $csrfToken;
                                        }
                                        $token = $_SESSION['csrfToken']; ?> <?php if (!empty($errors) && !empty($_POST['confirm'])): ?> <?php echo '<ul>'; ?> <?php foreach ($errors as $error) {
                                                                                                                                                                    echo '<li>' . $error . '</li>';
                                                                                                                                                                } ?> <?php echo '</ul>'; ?> <?php endif; ?> <div class="container ">
            <h1>お問い合わせフォーム</h1>
            <form method="POST" action="フォーム練習.php" enctype="multipart/form-data">
                <div class="mb-3 w-25"> <label for="name" class="form-label">氏名：</label> <input type="text" class="form-control" id="name" name="name" value="<?php if (!empty($_POST['name'])) echo h($_POST['name']); ?>" required> </div>
                <div class="mb-3 w-25"> <label for="email" class="form-label">メールアドレス：</label> <input type="email" class="form-control" id="email" name="email" value="<?php if (!empty($_POST['email'])) echo h($_POST['email']); ?>" required> </div>
                <div class="form-floating w-50">
                    <p>お問い合わせ内容：</p> <label for="contact"></label> <textarea class="form-control" id="contact" name="contact" style="height: 200px"><?php if (!empty($_POST['contact'])) echo h($_POST['contact']); ?></textarea>
                </div>
                <div class="mt-3">詳細を確認できるファイルがあれば添付してください</div>
                <div class="input-group mb-3 w-50"> <label class="input-group-text" for="inputGroupFile01">Upload</label> <input type="file" class="form-control" id="inputGroupFile01" name="attach"> </div>
                <div class="form-check mb-3 mt-3"> <input class="form-check-input" id="check" type="checkbox" name='check' value="1"> <?php if (!empty($_POST['check'])) echo 'checked'; ?>> <label class="form-check-label" for="check">内容に誤りがないか確認しましたか？</label> </div> <input class="btn btn-info" type="submit" name='confirm' value="確認画面へ"> <input type="hidden" name="csrf" value="<?php echo $token; ?>">
            </form>
        </div> <?php endif; ?> <!-- page1------------------------------------------------------ -->
    <div class="container"> <?php if ($pageFlag == 1): ?> <?php if (($_POST['csrf']) === $_SESSION['csrfToken']): ?> <form method="POST" action="フォーム練習.php">
                    <div class="mb-3"> 氏名： <?php echo h($_POST['name']); ?> </div>
                    <div class="mb-3"> メールアドレス： <?php echo h($_POST['email']); ?> </div>
                    <div class="mb-3"> お問い合わせ内容： <?php echo h($_POST['contact']); ?> </div> <input type="submit" name="back" value="戻る"> <input type="submit" name='submit' value="送信"> <input type="hidden" name="name" value="<?php echo h($_POST['name']); ?>"> <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>"> <input type="hidden" name="contact" value="<?php echo h($_POST['contact']); ?>"> <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
                </form> <?php endif; ?> <?php endif; ?> </div> <!-- page2------------------------------------------------------ --> <?php if ($pageFlag == 2): ?> <?php if ($_POST["csrf"] === $_SESSION['csrfToken']): ?> <p>送信完了しました。</p>
            <p>返信まで数日かかる場合があります。</p> <?php unset($_SESSION['csrfToken']) ?> <?php endif; ?> <?php endif; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</html>
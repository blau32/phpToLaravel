<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '<h1>if文まとめ</h1>';

    echo '<h2>1. 基本的なif文</h2>';
    $x = 10;
    if ($x > 5) {
        echo '$xは5より大きいです<br>';
    }
    echo '<br>';

    /*
    // 雛形
    if (条件) {
        // 条件が真の場合の処理
    }
    */

    echo '<h2>2. if-else文</h2>';
    $age = 20;
    if ($age >= 18) {
        echo '成人です<br>';
    } else {
        echo '未成年です<br>';
    }
    echo '<br>';

    /*
    // 雛形
    if (条件) {
        // 条件が真の場合の処理
    } else {
        // 条件が偽の場合の処理
    }
    */

    echo '<h2>3. if-elseif-else文</h2>';
    $score = 85;
    if ($score >= 90) {
        echo '評価: 優秀（A）<br>';
    } elseif ($score >= 80) {
        echo '評価: 良好（B）<br>';
    } elseif ($score >= 70) {
        echo '評価: 普通（C）<br>';
    } elseif ($score >= 60) {
        echo '評価: 可（D）<br>';
    } else {
        echo '評価: 不可（F）<br>';
    }
    echo '<br>';

    /*
    // 雛形
    if (条件1) {
        // 条件1が真の場合の処理
    } elseif (条件2) {
        // 条件2が真の場合の処理
    } elseif (条件3) {
        // 条件3が真の場合の処理
    } else {
        // すべての条件が偽の場合の処理
    }
    */

    echo '<h2>4. 複数の条件（論理演算子）</h2>';
    $temperature = 25;
    $humidity = 60;

    // AND条件（&& または and）
    if ($temperature > 20 && $humidity < 70) {
        echo '快適な天気です<br>';
    }

    // OR条件（|| または or）
    if ($temperature > 30 || $humidity > 80) {
        echo '暑いまたは湿度が高いです<br>';
    }

    // NOT条件（!）
    if (!($temperature < 0)) {
        echo '気温は0度以上です<br>';
    }
    echo '<br>';

    /*
    // 雛形
    // AND条件
    if (条件1 && 条件2) {
        // 両方の条件が真の場合の処理
    }
    
    // OR条件
    if (条件1 || 条件2) {
        // どちらかの条件が真の場合の処理
    }
    
    // NOT条件
    if (!条件) {
        // 条件が偽の場合の処理
    }
    */

    echo '<h2>5. ネストしたif文（if文の中にif文）</h2>';
    $userAge = 25;
    $hasLicense = true;

    if ($userAge >= 18) {
        echo '18歳以上です<br>';
        if ($hasLicense) {
            echo '運転免許を持っています<br>';
            echo '車を運転できます<br>';
        } else {
            echo '運転免許を持っていません<br>';
        }
    } else {
        echo '18歳未満です<br>';
    }
    echo '<br>';

    /*
    // 雛形
    if (条件1) {
        // 条件1が真の場合の処理
        if (条件2) {
            // 条件1と条件2が真の場合の処理
        } else {
            // 条件1が真で条件2が偽の場合の処理
        }
    } else {
        // 条件1が偽の場合の処理
    }
    */

    echo '<h2>6. 三項演算子（条件演算子）</h2>';
    $x = 10;
    $result = ($x > 5) ? '5より大きい' : '5以下';
    echo '$x = 10 の場合: ' . $result . '<br>';

    // ネストした三項演算子
    $score = 85;
    $grade = ($score >= 90) ? 'A' : (($score >= 80) ? 'B' : 'C');
    echo '$score = 85 の場合: 評価 ' . $grade . '<br>';
    echo '<br>';

    /*
    // 雛形
    // 基本的な三項演算子
    $変数 = (条件) ? 真の場合の値 : 偽の場合の値;
    
    // ネストした三項演算子
    $変数 = (条件1) ? 値1 : ((条件2) ? 値2 : 値3);
    */

    echo '<h2>7. null合体演算子（PHP 7.0以降）</h2>';
    $name = null;
    $displayName = $name ?? 'ゲスト';
    echo '$name = null の場合: ' . $displayName . '<br>';

    $name = '太郎';
    $displayName = $name ?? 'ゲスト';
    echo '$name = "太郎" の場合: ' . $displayName . '<br>';
    echo '<br>';

    /*
    // 雛形
    $変数 = $値 ?? 'デフォルト値';
    // $値がnullの場合、'デフォルト値'が使用される
    */

    echo '<h2>8. 配列や文字列の条件チェック</h2>';
    $fruits = ['apple', 'banana', 'orange'];

    // in_array()で配列内の値の存在確認
    if (in_array('apple', $fruits)) {
        echo 'appleは配列に含まれています<br>';
    }

    // isset()で変数が設定されているか確認
    $data = ['name' => '太郎', 'age' => 25];
    if (isset($data['name'])) {
        echo 'nameキーが存在します: ' . $data['name'] . '<br>';
    }

    // empty()で値が空か確認
    $value = '';
    if (empty($value)) {
        echo '値が空です<br>';
    }

    // 文字列の長さチェック
    $text = 'Hello';
    if (strlen($text) > 0) {
        echo '文字列の長さ: ' . strlen($text) . '<br>';
    }
    echo '<br>';

    /*
    // 雛形
    // 配列内の値の存在確認
    if (in_array(値, $配列)) {
        // 配列に値が含まれている場合の処理
    }
    
    // 変数が設定されているか確認
    if (isset($変数)) {
        // 変数が設定されている場合の処理
    }
    
    // 値が空か確認
    if (empty($変数)) {
        // 変数が空の場合の処理
    }
    
    // 文字列の長さチェック
    if (strlen($文字列) > 0) {
        // 文字列が空でない場合の処理
    }
    */

    echo '<h2>9. 比較演算子の使い方</h2>';
    $a = 10;
    $b = '10';

    echo '$a = 10, $b = "10" の場合<br>';
    if ($a == $b) {
        echo '$a == $b は true（値のみ比較）<br>';
    }
    if ($a === $b) {
        echo '$a === $b は true<br>';
    } else {
        echo '$a === $b は false（値と型を比較）<br>';
    }
    echo '<br>';

    /*
    // 雛形
    // 値のみ比較
    if ($変数1 == $変数2) {
        // 値が等しい場合の処理
    }
    
    // 値と型を比較（推奨）
    if ($変数1 === $変数2) {
        // 値と型が等しい場合の処理
    }
    
    // 等しくない
    if ($変数1 != $変数2) {
        // 値が等しくない場合の処理
    }
    
    // 値と型が等しくない
    if ($変数1 !== $変数2) {
        // 値または型が等しくない場合の処理
    }
    */

    echo '<h2>10. 複雑な条件の例</h2>';
    $userRole = 'admin';
    $isLoggedIn = true;
    $permissions = ['read', 'write', 'delete'];

    if ($isLoggedIn && ($userRole === 'admin' || in_array('write', $permissions))) {
        echo '管理者または書き込み権限があります<br>';
    }
    echo '<br>';

    /*
    // 雛形
    if (条件1 && (条件2 || 条件3)) {
        // 複数の条件を組み合わせた処理
    }
    */

    echo '<h2>11. 早期リターン（Early Return）パターン</h2>';
    function checkUser($age, $hasLicense)
    {
        if ($age < 18) {
            return '18歳未満は利用できません';
        }

        if (!$hasLicense) {
            return '運転免許が必要です';
        }

        return '利用可能です';
    }

    echo checkUser(25, true) . '<br>';
    echo checkUser(16, false) . '<br>';
    echo checkUser(20, false) . '<br>';
    echo '<br>';

    /*
    // 雛形
    function 関数名($引数1, $引数2) {
        if (条件1) {
            return '結果1';
        }
        
        if (条件2) {
            return '結果2';
        }
        
        return 'デフォルト結果';
    }
    */

    echo '<h2>12. switch文との比較</h2>';
    echo 'if-elseif-else文:<br>';
    $day = '月曜日';
    if ($day === '月曜日') {
        echo '月曜日です<br>';
    } elseif ($day === '火曜日') {
        echo '火曜日です<br>';
    } else {
        echo 'その他の曜日です<br>';
    }

    echo '<br>同じことをswitch文で書くと:<br>';
    switch ($day) {
        case '月曜日':
            echo '月曜日です<br>';
            break;
        case '火曜日':
            echo '火曜日です<br>';
            break;
        default:
            echo 'その他の曜日です<br>';
    }
    echo '<br>';

    /*
    // 雛形（if-elseif-else文）
    if ($変数 === 値1) {
        // 値1の場合の処理
    } elseif ($変数 === 値2) {
        // 値2の場合の処理
    } else {
        // その他の場合の処理
    }
    
    // 雛形（switch文）
    switch ($変数) {
        case 値1:
            // 値1の場合の処理
            break;
        case 値2:
            // 値2の場合の処理
            break;
        default:
            // その他の場合の処理
    }
    */

    echo '<h2>13. 実践的な例：ログイン認証</h2>';
    $username = 'user123';
    $password = 'password123';
    $storedPassword = 'password123';

    if (empty($username) || empty($password)) {
        echo 'ユーザー名とパスワードを入力してください<br>';
    } elseif ($password === $storedPassword) {
        echo 'ログイン成功！<br>';
    } else {
        echo 'パスワードが正しくありません<br>';
    }
    echo '<br>';

    /*
    // 雛形（ログイン認証の例）
    if (empty($username) || empty($password)) {
        // 入力が空の場合の処理
    } elseif ($password === $storedPassword) {
        // 認証成功の場合の処理
    } else {
        // 認証失敗の場合の処理
    }
    */

    ?>
</body>

</html>
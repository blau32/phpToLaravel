<?php

// バリデーション用の関数
function validation($request)
{

    $errors = [];

    if (empty($request['your_name']) || 20 < mb_strlen($request['your_name'])) {
        $errors[] = 'your name is required. Please enter your name within 20 characters';
    }

    //filter_var：フィルターを適用してバリデーションを行う
    //FILTER_VALIDATE_EMAIL：メールアドレスの形式をチェック
    if (empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'please enter a valid email address and enter your email address correctly';
    }

    if (!empty($request['url'])){
        if (!filter_var($request['url'], FILTER_VALIDATE_URL)) {
            $errors[] = 'please enter a valid URL';
        }
    }

    if (!isset($request['gender'])) {
        $errors[] = 'gender is required';
    }

    if (empty($request['age']) || 6 < $request['age']) {
        $errors[] = 'age is required and select your age';
    }

    if (empty($request['contact']) || 200 < mb_strlen($request['contact'])) {
        $errors[] = 'contact is required. Please enter your contact within 200 characters';
    }

    if (empty($request['caution'])) {
        $errors[] = 'please check the caution';
    }

    return $errors;
}

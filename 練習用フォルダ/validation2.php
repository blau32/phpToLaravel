<?php // バリデーション用の関数 
function validation2($request)
{
    $errors = [];
    if (empty($request['name']) || 20 < mb_strlen($request['name'])) {
        $errors[] = '氏名は必須です。20文字以内で入力してください';
    }
    //filter_var：フィルターを適用してバリデーションを行う 
    //FILTER_VALIDATE_EMAIL：メールアドレスの形式をチェック 
    if (empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'メールアドレスは必須です。正しいメールアドレスを入力してください';
    }
    if (empty($request['contact']) || 300 < mb_strlen($request['contact'])) {
        $errors[] = 'お問い合わせ内容は必須です。300文字以内で入力してください';
    }
    if (empty($request['check'])) {
        $errors[] = 'チェックは必須です。内容に誤りがないか確認してください';
    }
    return $errors;
}

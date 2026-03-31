<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーションの言語行
    |--------------------------------------------------------------------------
    |
    | 次の言語行は、バリデータクラスが使うデフォルトのエラーメッセージです。
    | サイズなど一部のルールには複数の書き方があります。必要に応じて
    | ここで調整してください。
    |
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueのとき、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeは:dateより後の日付にしてください。',
    'after_or_equal' => ':attributeは:date以降の日付にしてください。',
    'alpha' => ':attributeは文字のみで指定してください。',
    'alpha_dash' => ':attributeは英数字、ダッシュ、アンダースコアのみで指定してください。',
    'alpha_num' => ':attributeは英数字のみで指定してください。',
    'array' => ':attributeは配列にしてください。',
    'ascii' => ':attributeは半角の英数字と記号のみで指定してください。',
    'before' => ':attributeは:dateより前の日付にしてください。',
    'before_or_equal' => ':attributeは:date以前の日付にしてください。',
    'between' => [
        'array' => ':attributeは:min個から:max個の間で指定してください。',
        'file' => ':attributeは:min KBから:max KBの間で指定してください。',
        'numeric' => ':attributeは:minから:maxの間で指定してください。',
        'string' => ':attributeは:min文字から:max文字の間で指定してください。',
    ],
    'boolean' => ':attributeは真偽値として指定してください。',
    'confirmed' => ':attributeと確認用の入力が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付にしてください。',
    'date_format' => ':attributeは:format形式と一致しません。',
    'decimal' => ':attributeは小数点以下:decimal桁にしてください。',
    'declined' => ':attributeは拒否してください。',
    'declined_if' => ':otherが:valueのとき、:attributeは拒否してください。',
    'different' => ':attributeと:otherは異なる値にしてください。',
    'digits' => ':attributeは:digits桁の数字にしてください。',
    'digits_between' => ':attributeは:min桁から:max桁の間で指定してください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeに重複した値があります。',
    'doesnt_end_with' => ':attributeは次のいずれかで終わらないでください: :values。',
    'doesnt_start_with' => ':attributeは次のいずれかで始まらないでください: :values。',
    'email' => ':attributeは有効なメールアドレス形式にしてください。',
    'ends_with' => ':attributeは次のいずれかで終わる必要があります: :values。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'file' => ':attributeはファイルにしてください。',
    'filled' => ':attributeに値を入力してください。',
    'gt' => [
        'array' => ':attributeは:value個より多くしてください。',
        'file' => ':attributeは:value KBより大きいファイルにしてください。',
        'numeric' => ':attributeは:valueより大きくしてください。',
        'string' => ':attributeは:value文字より多くしてください。',
    ],
    'gte' => [
        'array' => ':attributeは:value個以上にしてください。',
        'file' => ':attributeは:value KB以上にしてください。',
        'numeric' => ':attributeは:value以上にしてください。',
        'string' => ':attributeは:value文字以上にしてください。',
    ],
    'image' => ':attributeは画像にしてください。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeは:otherに存在しません。',
    'integer' => ':attributeは整数にしてください。',
    'ip' => ':attributeは有効なIPアドレスにしてください。',
    'ipv4' => ':attributeは有効なIPv4アドレスにしてください。',
    'ipv6' => ':attributeは有効なIPv6アドレスにしてください。',
    'json' => ':attributeは有効なJSON文字列にしてください。',
    'lowercase' => ':attributeは小文字にしてください。',
    'lt' => [
        'array' => ':attributeは:value個未満にしてください。',
        'file' => ':attributeは:value KB未満にしてください。',
        'numeric' => ':attributeは:value未満にしてください。',
        'string' => ':attributeは:value文字未満にしてください。',
    ],
    'lte' => [
        'array' => ':attributeは:value個以下にしてください。',
        'file' => ':attributeは:value KB以下にしてください。',
        'numeric' => ':attributeは:value以下にしてください。',
        'string' => ':attributeは:value文字以下にしてください。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスにしてください。',
    'max' => [
        'array' => ':attributeは:max個以下にしてください。',
        'file' => ':attributeは:max KB以下のファイルにしてください。',
        'numeric' => ':attributeは:max以下にしてください。',
        'string' => ':attributeは:max文字以下にしてください。',
    ],
    'max_digits' => ':attributeは:max桁以下にしてください。',
    'mimes' => ':attributeは次のタイプのファイルにしてください: :values。',
    'mimetypes' => ':attributeは次のタイプのファイルにしてください: :values。',
    'min' => [
        'array' => ':attributeは:min個以上にしてください。',
        'file' => ':attributeは:min KB以上のファイルにしてください。',
        'numeric' => ':attributeは:min以上にしてください。',
        'string' => ':attributeは:min文字以上にしてください。',
    ],
    'min_digits' => ':attributeは:min桁以上にしてください。',
    'missing' => ':attributeは存在しないでください。',
    'missing_if' => ':otherが:valueのとき、:attributeは存在しないでください。',
    'missing_unless' => ':otherが:valueでない限り、:attributeは存在しないでください。',
    'missing_with' => ':valuesのいずれかがあるとき、:attributeは存在しないでください。',
    'missing_with_all' => ':valuesがすべてあるとき、:attributeは存在しないでください。',
    'multiple_of' => ':attributeは:valueの倍数にしてください。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeは数値にしてください。',
    'password' => [
        'letters' => ':attributeには少なくとも1文字の英字を含めてください。',
        'mixed' => ':attributeには大文字と小文字の両方を含めてください。',
        'numbers' => ':attributeには少なくとも1つの数字を含めてください。',
        'symbols' => ':attributeには少なくとも1つの記号を含めてください。',
        'uncompromised' => '指定の:attributeはデータ漏洩で使われたことがあります。別の:attributeを選んでください。',
    ],
    'present' => ':attributeが存在する必要があります。',
    'prohibited' => ':attributeは入力できません。',
    'prohibited_if' => ':otherが:valueのとき、:attributeは入力できません。',
    'prohibited_unless' => ':otherが:valuesに含まれない限り、:attributeは入力できません。',
    'prohibits' => ':attributeがある場合、:otherは入力できません。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeは必須です。',
    'required_array_keys' => ':attributeには次のキーを含めてください: :values。',
    'required_if' => ':otherが:valueのとき、:attributeは必須です。',
    'required_if_accepted' => ':otherが承認されたとき、:attributeは必須です。',
    'required_unless' => ':otherが:valuesに含まれない限り、:attributeは必須です。',
    'required_with' => ':valuesのいずれかがあるとき、:attributeは必須です。',
    'required_with_all' => ':valuesがすべてあるとき、:attributeは必須です。',
    'required_without' => ':valuesのいずれかがないとき、:attributeは必須です。',
    'required_without_all' => ':valuesがすべてないとき、:attributeは必須です。',
    'same' => ':attributeと:otherは一致させてください。',
    'size' => [
        'array' => ':attributeは:size個にしてください。',
        'file' => ':attributeは:size KBにしてください。',
        'numeric' => ':attributeは:sizeにしてください。',
        'string' => ':attributeは:size文字にしてください。',
    ],
    'starts_with' => ':attributeは次のいずれかで始めてください: :values。',
    'string' => ':attributeは文字列にしてください。',
    'timezone' => ':attributeは有効なタイムゾーンにしてください。',
    'unique' => ':attributeはすでに使われています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは大文字にしてください。',
    'url' => ':attributeは有効なURLにしてください。',
    'ulid' => ':attributeは有効なULIDにしてください。',
    'uuid' => ':attributeは有効なUUIDにしてください。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーションの言語行
    |--------------------------------------------------------------------------
    |
    | 「属性名.ルール名」の形式で行を定義すると、属性ごとに
    | 専用のメッセージをすばやく指定できます。
    |
    */

    'custom' => [],

    /*
    |--------------------------------------------------------------------------
    | 属性の表示名
    |--------------------------------------------------------------------------
    |
    | :attribute の代わりに、メールアドレスのように読みやすい名前を
    | 表示するために使います。メッセージをより分かりやすくできます。
    |
    */

    'attributes' => [
        'name' => '名前',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード（確認）',
        'current_password' => '現在のパスワード',
        'token' => 'トークン',
        'remember' => 'ログイン状態を保持',
        'gender'=>'性別',
        'title'=>'件名',
        'age'=>'年齢',
        'contact'=>'お問い合わせ内容',
        'caution'=>'注意事項に同意',
    ],

];

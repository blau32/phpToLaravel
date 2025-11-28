<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>配列</title>
</head>

<body>
    <?php
    //配列（インデックス配列）
    $macaron4 = ['chocolate', 'strawberry', 'vanilla', 'matcha'];

    // 格納された配列を確認したいとき
    var_dump($macaron4);
    echo '<br>';

    // echo <pre> を使うと配列を見やすく表示できる
    echo '<pre>';
    var_dump($macaron4);
    echo '</pre>';

    /*
        <pre>タグとは
            「preformatted text（プレフォーマット済みテキスト）」の略で、以下の特徴があります：
            改行やスペースをそのまま表示する
            等幅フォントで表示される
            配列やオブジェクトの構造を見やすく表示できる
        */

    // 各要素の数は0から始まる
    echo $macaron4[0];
    echo '<br>';
    echo $macaron4[1];
    echo '<br>';
    echo $macaron4[2];
    echo '<br>';
    echo $macaron4[3];
    echo '<br>';

    // 配列を直接表示することはできない
    // echo $macaron4;

    // 配列に配列を格納できる
    $macaron4and4 = [
        ['chocolate', 'strawberry', 'vanilla', 'matcha'],
        ['orange', 'apple', 'banana', 'blueberry']
    ];
    echo '<br>';

    var_dump($macaron4and4);
    echo '<br>';

    echo '<pre>';
    var_dump($macaron4and4);
    echo '</pre>';

    echo $macaron4and4[0][0];
    echo '<br>';
    echo $macaron4and4[0][1];
    echo '<br>';
    echo $macaron4and4[0][2];
    echo '<br>';
    echo $macaron4and4[0][3];
    echo '<br>';
    echo $macaron4and4[1][0];
    echo '<br>';
    echo $macaron4and4[1][1];
    echo '<br>';
    echo $macaron4and4[1][2];
    echo '<br>';
    echo $macaron4and4[1][3];
    echo '<br>';


    /*
        連想配列
        キーと値がセットになった配列
        "キー" => "値"
        */

    $Ohtani  = [
        'name' => 'Ohtani Shohei',
        'age' => 31,
        'team' => 'Los Angels Dodgers',
        'position' => 'Pitcher and Hitter',
        'number' => 17,
    ];
    echo '<br>';

    var_dump($Ohtani);
    echo '<br>';

    echo '<pre>';
    var_dump($Ohtani);
    echo '</pre>';
    echo '<br>';

    /*
        var_dump()とprint_r()の違い
        
        1. var_dump()
           - データ型と値を表示する
           - より詳細な情報を提供（型、長さなど）
           - 戻り値はない（void）
           - デバッグに最適
        
        2. print_r()
           - 値を読みやすい形式で表示する
           - データ型の情報は表示しない
           - 戻り値として文字列を返すこともできる（第2引数にtrueを指定）
           - より簡潔で読みやすい出力
    */

    echo '<h3>var_dump()とprint_r()の比較</h3>';

    echo '<h4>var_dump()の出力:</h4>';
    echo '<pre>';
    var_dump($Ohtani);
    echo '</pre>';

    echo '<h4>print_r()の出力:</h4>';
    echo '<pre>';
    print_r($Ohtani);
    echo '</pre>';

    echo '<br>';

    // keyを指定して値を呼び出す
    echo $Ohtani['name'];
    echo '<br>';
    echo $Ohtani['age'];
    echo '<br>';
    echo $Ohtani['team'];
    echo '<br>';
    echo $Ohtani['position'];
    echo '<br>';
    echo $Ohtani['number'];

    // 値に配列を格納することもできる
    $LosAngelsDodgers = [
        'Ohtani Shohei' => [
            'age' => 31,
            'position' => 'Pitcher and Hitter',
            'number' => 17,
        ],
        'Mookie Betts' => [
            'age' => 33,
            'position' => 'Short',
            'number' => 50,
        ],
        'Freddie Freeman' => [
            'age' => 36,
            'position' => 'First',
            'number' => 5,
        ]
    ];

    echo '<br>';

    var_dump($LosAngelsDodgers);
    echo '<br>';

    echo '<pre>';
    var_dump($LosAngelsDodgers);
    echo '</pre>';

    //連想配列は番号では呼び出せない
    // $LosAngelsDodgers[0];

    echo $LosAngelsDodgers['Ohtani Shohei']['age'];
    echo '<br>';

    echo $LosAngelsDodgers['Mookie Betts']['position'];
    echo '<br>';

    echo '<br>';

    /*
    foreach
    配列の要素を順番に取り出す
    foreach ($配列(複数形) as $要素(単数形)) {
        echo $要素;
    }
    */
    foreach ($Ohtani as $data) {
        echo $data;
        echo '<br>';
    }

    foreach ($Ohtani as $data => $value){
        echo $data . ' is ' . $value;
        echo '<br>';
    }

    ?>
</body>

</html>
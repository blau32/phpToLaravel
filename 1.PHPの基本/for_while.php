<?php
/*
for()とwhile()を使って繰り返し処理を行う
for($i = 0; $i < 10; $i++) {
    echo $i.'<br>';
}
*/

for($i = 0; $i < 10; $i++){
    echo $i.'<br>';
    // break;
    // breakを使って  強制的にループを抜ける
    if($i % 2 === 0){
        // continue;
        //continueを使って  強制的に次のループに進む(今回の処理をスキップ)
        echo $i. ' is even<br>';
    }else{
        echo $i. ' is odd<br>';
    }
}
echo '<br>';


/*
while($i < 10) {
    echo $i.'<br>';
    $i++;
}
*/

$j = 0;
while($j < 10){
    echo $j.'<br>';
    $j++;
}

/*
whileは変数をwhile文の外に書く
*/

?>
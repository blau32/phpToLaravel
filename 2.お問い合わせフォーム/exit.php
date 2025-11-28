<?php
$test = 123;
echo $test;
echo '<br>';

exit;
// 処理を抜ける（if文におけるbreakと同じ）
// exitを使った場合は以下の処理は表示されない
echo 'これは表示されない';
echo '<br>';

echo $test;
echo '<br>';

?>
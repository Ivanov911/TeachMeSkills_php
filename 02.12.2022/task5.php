<?php
$str = (string) readline('Enter text: ');
$arr = (str_word_count($str, 1));
foreach ($arr as $v) {
    echo $v . PHP_EOL;
}
?>
<?php
$arr = [1, 1, 4, 9, 5, 6, 7, 49, 9, 11, 100, 5, 8, 182];
$i = 0;
foreach ($arr as $key => $elem) {
    if ($key ** 2 == $elem) {
        echo ($key) . PHP_EOL;
        $i++;
    }
}
if ($i < 1) {
    echo 'not found';
}
?>
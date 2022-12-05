<?php
$arr = [1, 1, 4, 4, 5, 6, 6, 49, 9, 11, 100, 5, 5, 182];
$arr = array_unique($arr);
foreach ($arr as $elem) {
    echo $elem . PHP_EOL;
}
?>
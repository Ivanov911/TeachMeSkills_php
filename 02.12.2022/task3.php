<?php
$arr1 = [1, 100, 4, 4, 5, 6, 6, 49, 9, 11, 100, 5, 5, 182];
$arr2 = [1, 1, 4, 4, 5, 6, 6, 49, 9, 11, 100, 5, 5, 182];
$resalt_arr = array_merge($arr1, $arr2);
arsort($resalt_arr);
foreach ($resalt_arr as $elem) {
    echo $elem . PHP_EOL;
}
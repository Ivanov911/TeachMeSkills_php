<?php
$arr = [1, -3, 4, -5, 6, -7, 9, -10];
$arrN = [];
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] > 0) {
        array_push($arrN, $arr[$i]);
    } else {
        array_push($arrN, $arr[$i], 0);
    }
}
var_dump($arrN);
?>
<?php
$arr = [1, 3, 4, 5, 6, 7, 9, 10];
var_dump($arr);
unset($arr[readline('Enter number of index for delete: ')]);
var_dump($arr);
?>
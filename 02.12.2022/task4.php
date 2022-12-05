<?php
$arr = ['qwe', 'qwert', 'qwerty', 'qwertya', 'qwertyas', 'abc'];
$str = (string) readline('Enter word (qwerty): ');
echo 'INDEX: ' . (array_search($str, $arr, $strict = true));
?>
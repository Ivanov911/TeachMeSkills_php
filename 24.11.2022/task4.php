<?php
$str = (string) readline('Enter string: ');
echo ('First: ' . $str[0] . ';' . PHP_EOL . 'Befor last: ' . $str[strlen($str) - 2] . ';' . PHP_EOL . 'Last: ' . $str[strlen($str) - 1] . ';' . PHP_EOL);
?>
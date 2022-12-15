<?php
$str = (string) readline('Enter text: ');
echo 'The number of occurrences of a character in a string: ' . substr_count($str, (string) readline('Enter a character: '));
?>
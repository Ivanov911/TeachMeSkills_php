<?php
$str = (string) readline('Enter text: ');
$arr = explode(' ', preg_replace('/[[:punct:]\s]+/u', ' ', $str));
$max = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if (strlen($arr[$i]) > strlen($max)) {
        $max = $arr[$i];
    }
}
echo "The Longest word: " . $max;
?>
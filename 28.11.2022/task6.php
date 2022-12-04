<?php
$text = (string) readline('Enter text: ');
for ($i = strlen($text); $i >= 0; $i--) {
    $str .= $text[$i];
}
if ($str == $text)
    echo $text . " - Palindrome";
else
    echo $text . " - Not a palindrome";
?>
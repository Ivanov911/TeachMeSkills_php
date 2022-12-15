<?php
function pal($text)
{
    $str = '';
    for ($i = strlen($text); $i >= 0; $i--) {
        $str .= $text[$i];
    }
    if ($str == $text)
        echo $text . " - Palindrome";
    else
        echo $text . " - Not a palindrome";
}
$text = (string) readline('Enter text: ');
pal($text);
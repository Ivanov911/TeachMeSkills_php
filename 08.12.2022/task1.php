<?php
// 1. Проверьте соответствует ли вводимый пользователем номер мобильного телефона следующему формату: +375 (29/33/25) 777-77-77


$str = readline('Enter tel format +xxx (xx) xxx-xx-xx: ');
$reg = ('#^\+\d{3}\s[(](29|33|25)[)]\s\d{3}[-](\d{2})[-]\2$#');
preg_match($reg, $str);
if (preg_match($reg, $str)) {
    echo "$str Верный номер!" . PHP_EOL;
} else {
    echo "$str Неверный номер!" . PHP_EOL;
}
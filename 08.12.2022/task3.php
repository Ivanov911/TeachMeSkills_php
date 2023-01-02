<?php
// 3. Дана строка с буквами, пробелами и цифрами. Найдите сумму всех чисел из данной строки.


$str = readline('Enter  string: ');
$reg = ('#(\d+)#');
$sum = 0;
if (preg_match_all($reg, $str, $match, PREG_SET_ORDER)) {
    foreach ($match as $el) {
        $sum += $el[0];
    }
    echo $sum;
} else {
    echo 'Цифры в строке отсутствуют';
}
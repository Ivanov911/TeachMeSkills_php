<?php
// Дан текст, содержащий даты в формате 2022/12/05 19:00. Выведите все даты, у которых год в диапазоне между 1000 и 2022.


$str = readline('Enter  string: ');
$reg = ('#(\d{4}\/\d{2}\/\d{2}\s\d{2}:\d{2})#');
if (preg_match_all($reg, $str, $match, PREG_PATTERN_ORDER)) {
    foreach ($match[0] as $el) {
        if (substr($el, 0, 4) >= 1000 && substr($el, 0, 4) <= 2022) {
            echo $el . PHP_EOL;
        }
    }
} else {
    echo 'Год не в диапазоне между 1000 и 2022';
}
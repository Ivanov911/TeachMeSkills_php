<?php
$str = (string) readline('Enter text: ');
$arr = str_split($str, 1);

function biggestSymbol($arr)
{
    $arrN = [];
    foreach ($arr as $elem) {
        array_push($arrN, (ord($elem)));
    }
    return max($arrN) . PHP_EOL;
}

function summOfSymbols($arr)
{
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += ord($elem);
    }
    return ($sum) . PHP_EOL;
}

echo 'Cамый большой символ (по ASCII код) в строке: ' . biggestSymbol($arr);
echo 'Cумму всех символов (по ASCII код): ' . summOfSymbols($arr);
?>
<?php
function sum($arr)
{
    $sum = 0;
    foreach ($arr as $elem)
        $sum += $elem;
    return $sum;
}
echo 'Sum: ' . sum(array(1, 2, 3, 4));
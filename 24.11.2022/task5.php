<?php
$a = 871;
$b = $a % 10;
$c = (($a % 100) - $b) / 10;
$d = ($a - ($c * 10) - $b) / 100;
echo 'Sum of number: ' . ($b + $c + $d);
?>
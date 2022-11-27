<?php
$a = (int) readline('Enter number a>1: ');
if ($a <= 1) {
    echo "Invalid number";
} else {
    for ($i = 1; $i <= $a; $i++) {
        $s = $s + $i * $i;
    }
echo "Sum of squares: " . $s;}
?>
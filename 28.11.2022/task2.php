<?php
$a = (int) readline('Enter number a: ');
if ($a % 2 == 0) {
    echo "An even number, a / 20 = " . ($a / 2);
} else {
    echo "Odd number, a x 3 = " . ($a * 3);
}
?>
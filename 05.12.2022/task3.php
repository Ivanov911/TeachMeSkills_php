<?php
function sqv($a, $b)
{
    return ($a ** 2 + $b ** 2) ** 0.5;
}
echo 'Triangle hypotenuse: ' . sqv(readline('Enter triangle catfet a: '), readline('Enter triangle catfet b: '));
?>
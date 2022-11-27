<?php
// $x = (int) (readline("Enter x: " ));
// $y = (int) (readline("Enter y: " ));
// if ($x > $y) {
//     echo 'x больше y';
//     }
//     else {
//         echo 'х меньше y';}

$a = (int) (readline("Enter a: " ));
$b = (int) (readline("Enter b: " ));
$c = (int) (readline("Enter c: " ));

$disk = $b**2 - 4*$a*$c;
if ($disk <0) {
    echo 'корней нет';
    
}
elseif ($disk ==0) {
    echo -$b/2;
}
else {
    echo (-1 * $b + sqrt($disk))/2*$a;
    echo (-1 * $b + sqrt($disk))/2*$a;
}
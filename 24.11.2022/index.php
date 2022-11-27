<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

/* ERROR */
// error_reporting(0);
// ini_set('display_errors', 'off');  
include 'task1.php';
include 'task2.php';
include 'task3.php';






//    echo 'Hello word  ' . (new \DateTime())->format('Y-m-d');
//    echo phpinfo();


// $a = (int) 123;

// echo ($a);

// var_dump ($a);
// $new = gettype ($a);
// echo $new;


// $b = 'jjjjkjjk';

// echo $b;

// $arr =[12, 2, 55, kjjj];
// echo $arr [2];

// unset ($arr )

// $a = 10;
// $b = 2;
// $c= $a + $b;
// echo $c . PHP_EOL;
// echo $a *$b .  PHP_EOL;


// $a = readline('Enter a: ');
// $b = readline('Enter b: ');
// $v = readline('Enter v: ');


// // fscanf(STDIN, "%d %d", $a, $b);




// // $c = ($a + $b + $v) / 3;
// // echo $c . PHP_EOL;
// // echo gettype(($a + $b + $v) / 3) .  PHP_EOL;
// $s= $a*1.2;
// $d = $a*2.2;

// echo $s . "///" . $d;
?>
</body>
</html>
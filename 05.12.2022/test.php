<?php
// $num=500;
// while ($num>10) {
// $num =$num/2;
// }
// echo $num;



// for ($num=500, $i=0; $num>10; $num= $num/2,$i++);
// echo $i;




// for ($i = 1; $i <= 3; $i++) {

//     for ($j = 1; $j <= 3; $j++) {
//         echo $i;
//         echo $j. " ";

//     }
// }



// $arr= [];
// for ($i=0; $i<=100; $i++){
// // $arr[$i]=$i;
// $arr [] = $i+1;
// }
// // foreach ($arr as $elem){
// //     echo $elem. PHP_EOL;
// // }
// var_dump($arr);

// $arr = [100,200,300,4,5,6];

// for ($i=0; $i<count($arr); $i++) {
//    $arrV= $arr[$i]*1.1;
//    echo $arrV.PHP_EOL;

// }




// $arr = [
//     1 => 125,
//     2 => 225,
//     3 => 128,
//     4 => 356,
//     5 => 145,
//     6 => 281,
//     7 => 452,
// ];
// $a = '';
// foreach ($arr as $el) {
//     $a = (string)$el  ;
//     // echo $a[0].PHP_EOL;
//     if (($a[0])==='1' or  ($a[0])==='2'){
//         echo $el.PHP_EOL;
//     }
// }



// $arr = [];
// $str = '';
// for ($i = 0; $i < 5; $i++) {

// 		$str .= 'xx';
// 		$arr[] = $str;
// }
// var_dump($arr);



// $arr = [];

// for ($i = 1; $i < 6; $i++) {
//     $str = '';

//     for ($j = 0; $j < 5; $j++) {
//         $str .= $i;
//     }

//     $arr[] = $str;
// }

// var_dump($arr);






// $users = [
//     [
//         'name'   => 'user1',
//         'age'    => 31,
//         'salary' => 1000,
//     ],
//     [
//         'name'   => 'user2',
//         'age'    => 32,
//         'salary' => 2000,
//     ],
//     [
//         'name'   => 'user3',
//         'age'    => 33,
//         'salary' => 3000,
//     ],
// ];
// foreach ($users as $user) {
//     echo $user['name'] . ': ' . $user['salary'] . '$, ' . $user['age'] . '<br>';
// }


// echo sqrt(16);


// echo pow (2,6);
// echo 2**8;



// echo mt_rand(1, 10);

// echo number_format(1234567);



// function tor() {
//     echo 1+2;
// }
// tor ();



// function wer ($q) {
//     if ($q>0) {
//         echo '+++';
//     } else {
//         echo'---';
//     };
// }
// wer(-6);



// function  sum($a, $b, $r) {
//     echo $a+$b+$r;
// }
// sum(5,8,5);





// function wer ($name = 'qwerty') {
//     echo " yoyr name: " . $name;
// }
// wer(); 



// function func($num, $y) {
//     return $num * $y;
// }
// $r = func(2,5);
// echo $r;



// function func($num) {
//     if ($num >= 0) {
//         return '+';
//     } else {
//         return '-';
//     }
// }

// echo func(-3); // выведет '+'
// // echo func(-3); // выведет '-'




// function func($num) {
//     if ($num <= 0) {
//         return abs($num);
//     } else {
//         return $num * $num;
//     }
// }

// echo func(10);
// echo func(-5);


// function func($num) {
//     $sum = 0;

//     for ($i = 1; $i <= $num; $i++) {
//         $sum += $i;

//     }
//     return $sum;
// }

// echo func(5);





// function func($num) {
//     if ($num >= 0) {
//         return sqrt($num);
//     } else {
//         return 0;
//     }
// }

// echo func(-3);





// function func($num1, $num2) {
//     if ($num1 > 0 and $num2 > 0) {
//        return  $num1 * $num2;
//     } else {
//         return  $num1 - $num2;
//     }

// }

// echo func(-3, 4);




// $arr = [1,1,1,1,2];
// $sum =0;
// foreach ($arr as $el){
//     $sum +=$el*$el;
// }
// echo $sum;

// $arr = [1,1,1,1,2];
// $arr1 = [1,1,1,1,1];

// function zxc($arr){
// $sum =0;
// foreach ($arr as $el){
//     $sum +=$el*$el;
// }
// return $sum;
// }
// echo zxc($arr1);



// $num = 10;
// $flag = true;

// for ($i = 2; $i < $num; $i++) {
//     if ($num % $i === 0) {
//         $flag = false;
//         break;
//     }
// }

// var_dump($flag);




// $i = 1;

// function func(){
//     echo $i;
//     $i++;

//     if ($i <= 10){
//         func(); // здесь функция вызывает сама себя
//     }
// }
// func();

// func([1, 2, 2]);
// function func($arr){
//     var_dump(array_shift($arr));
//     var_dump($arr); // выведет [2, 3] - массив уменьшился

//     var_dump(array_shift($arr)); // выведет 2
//     var_dump($arr); // выведет [3] - массив уменьшился

//     var_dump(array_shift($arr)); // выведет 3
//     var_dump($arr); //
// }




// function func($arr) {
//     var_dump(array_shift($arr));
//     var_dump($arr);

//     if (count($arr) !== 0) {
//         func($arr);
//     }
// }

// func(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]);




// function func($arr) {
//     foreach ($arr as $elem) {
//         if (is_array($elem)) {
//             func($elem);
//         } else {
//             echo $elem;
//         }
//     }
// }

// func([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]);






// function func($arr){
//     $sum = 0;
//     foreach ($arr as $elem) {
//         if (is_array($elem)) {
//             $sum += func($elem);
//         } else {
//             $sum += $elem;
//         }
//     }
//     return ($sum);
// }
// var_dump(func([1, [1, 1, 1], [2, 1, [1, [1, 1]]]]));


// $bw= 

// function getExtension1($filename) {
//     return end(explode(".", $filename));
//   }
  
// $filename = 'gfh.jyj';
//  echo getExtension1($filename);



//  $bw= 'asfqushdq.doc';
// $as='/(?<=\.)(exe|data|doc|docx|xls)/';

// $arr=[];

// if(preg_match($as,$bw ,$arr))
// {
//     echo "ошибка";
// }
// else{
//     echo "загружено";
// }

$str = (readline('Enter name: '));
echo ucwords($str);

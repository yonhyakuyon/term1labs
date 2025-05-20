<?php
$k = $_POST['k'];
$matrix1 = [];
$n = rand(3, 3); // Квадратная матрица порядка n
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $matrix1 [$i] [$j] = rand(0, 10);
    }
}
$matrix2 = []; // Квадратная матрица порядка n
for ($ii = 0; $ii < $n; $ii++) {
    for ($jj = 0; $jj < $n; $jj++) {
        $matrix2 [$ii] [$jj] = rand(0, 10);
    }
}
//$oldmatrix1 = $matrix1;
//$oldmatrix2 = $matrix2;
$m1row = 0;
$m1element = 0;
$m2element = 0;

//while ($k != $n * $n) {
//    if ($n > 2) {
//        $m2row = 2;
//    } else {
//        $m2row = 1;
//    }
//    if ($m2row = count($matrix2) - 1) {
//        $m2row = 0;
//        $m2element++;
//    } else {
//        $m2row++;
//    }
//
//}

//if ($n > 2){
//    $m2row = 2;
//}else{
//    $m2row = 1;
//}
//if ($m2row = count($matrix2)-1){
//    $m2row = 0;
//    $m2element++;
//}else{
//    $m2row++;
//}

$mtemp = $matrix1[$m1row][$m1element];
$mtemp2 = $matrix2[$m2row][$m2element];
$matrix1[$m1row][$m1element] = $mtemp2;
$matrix2[$m2row][$m2element] = $mtemp;
//echo '<pre>'.'Старая матрица 1';
//var_dump($oldmatrix1);
//echo '<pre>'.'Старая матрица 2';
//var_dump($oldmatrix2);
//echo '<pre>'.'Матрица 1';
//var_dump($matrix1);
//echo '<pre>'.'Матрица 2';
//var_dump($matrix2);
require_once "output.php";

<?php

// Дана квадратная матрица порядка n. С помощью допустимых преобразований
// добиться того, чьтобы один из элементов матрицы, обладающий
// наименьшим по модулю значением, распологался в правом нижнем углу матрицы

$matrix = [];
$n = rand(2, 3); // Квадратная матрица порядка n
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $matrix [$i] [$j] = rand(-10, 10);
    }
}
$oldmatrix = [];
$oldmatrix = $matrix; // Сохранение изначальной матрицы

//echo '<pre>';
//var_dump($oldmatrix);
$min = $matrix [0][0];
//for ($q = 0; $q != $n; $q++) {
//    foreach ($matrix [$q] as $rowkey1 => $row1) {
//
//        $temp = $row1;
//
//        $tempkey = $rowkey1;
//
//        $tempq = $q;
//
//        if (abs($temp) < abs($min)) {
//            $min = $temp;
//            $minkey = $tempkey;
//            $flip_key = $tempq;
//            break;
//        }
//
//
//    }
//
//}
$flip_key = 0;
$min_key = 0;
foreach ($matrix as $row_key => $row){
    $row_key2 = array_search($row, $matrix);
    foreach ($row as $column_key => $column){
        if (abs($column) == 0) {
            $min = $column;
            $min_key = $column_key;
            $flip_key = $row_key;
            $row_key2 = array_search($row, $matrix);
            break;
        }
        elseif (abs($column) < abs($min) ){
            $min = $column;
            $min_key = array_search($column, $row);
            $flip_key_test = $row_key;
            $flip_key = array_search($row, $matrix);
            break;
        }

    }
}

//$min = $temp;
//$minkey = $tempkey;
//$flip_key = $tempq;
//$n1 = $n - 1;
//list($matrix[$n1][$n1], $matrix[$flip_key][$minkey]) = array($matrix[$flip_key][$minkey], $matrix[$n1][$n1]);

$temp = $matrix[$n-1][$n-1];
$matrix[$n-1][$n-1] = $matrix[$flip_key][$min_key];
$matrix[$flip_key][$min_key] = $temp;
//echo '<br>', '$flip_key = ', $flip_key;
//
//echo '<br>', '$tempkey = ', $tempkey;
//
//echo '<br>', '$temp = ', $temp;
//
//echo '<br>', '$min = ', $min;
//
//echo '<br>', '$minkey = ', $minkey;

//echo '<br>', '$flip_key = ', $flip_key;
//echo '<br>', '$flip_key_test = ', $flip_key_test;
//echo '<br>', '$row_key = ', $row_key;
//
//echo '<br>', '$column_key = ', $column_key;
//
//echo '<br>', '$min = ', $min;
//
//echo '<br>', '$min_key = ', $min_key;
//
//echo '<pre>';
//var_dump($matrix);

require_once 'output.php';

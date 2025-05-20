<?php
session_start();
$n = rand(4, 5);
$el21 = $n-1;
$el22 = $n-4;

$el11 = 0;
$el12 = 0;
$_SESSION['$el11'] = $el11;
$_SESSION['$el12'] = $el12;
$_SESSION['$el21'] = $el21;
$_SESSION['$el22'] = $el22;
$_SESSION['$n'] = $n;


$matrix1 = [];
$matrix2 = [];
for ($ii = 0; $ii < $n; $ii++) {
    for ($jj = 0; $jj < $n; $jj++) {
        $matrix2 [$ii] [$jj] = rand(1, 9);
    }
}

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $matrix1 [$i] [$j] = rand(1, 9);
    }
}





$_SESSION['$matrix1'] = $matrix1;
$_SESSION['$matrix2'] = $matrix2;


require_once 'output.php';


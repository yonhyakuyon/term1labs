<?php
session_start();
$el11 = $_SESSION['$el11'];
$el12 = $_SESSION['$el12'];
$el21 = $_SESSION['$el21'];
$el22 = $_SESSION['$el22'];
$matrix2 = $_SESSION['$matrix2'];
$matrix1 = $_SESSION['$matrix1'];
$n = $_SESSION['$n'];
$temp = $matrix2;
$matrix2[$el21][$el22] = $matrix1[$el11][$el12];
$matrix1[$el11][$el12] = $temp[$el21][$el22];

if ($el12 == $n-1){
    $el12 = 0;
    $el11++;
}else{
    $el12++;
}
if($el22 == 0){
    $el22=$n-1;
    $el21--;
}else{
    $el22--;
}
if($el21 < 0){
    $el21 = $n-1;
    $el22 = $n-1;
}elseif($el11 == $n){
    $el11 = 0;
    $el12 = 0;
}




//$el12++;
//$el21--;
//$el22+($n-1);

$_SESSION['$n'] = $n;
$_SESSION['$matrix1'] = $matrix1;
$_SESSION['$matrix2'] = $matrix2;
$_SESSION['$el11'] = $el11;
$_SESSION['$el12'] = $el12;
$_SESSION['$el21'] = $el21;
$_SESSION['$el22'] = $el22;
require_once 'output.php';
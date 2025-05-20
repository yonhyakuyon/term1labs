<?php

// Задание 8
$mas = [];
$an = rand(1, 10);
for ($i = 0; $i < $an; $i++) {
    $mas[] = mt_rand();
} // задал массив
echo '<pre>';
var_dump($mas);
$even = 0;
$odd = 0;
$num = 1;
$s = 0;
$n = 1;
$g = 0;
cycle:
for ($g; ; $g++) {
    $s = $mas[$g];
    $str = str_split($s, 1); //Переводим элемент изначального массива в отдельный массив
    foreach ($str as $value) { // Проверяем на чётность
        if (((int)$value % 2) == 0) {
            $even++;
        } else {
            $odd++;
        }
    }
    echo $even, ';', $odd;
    if ($even > $odd) {// Если чётных больше, чем нечётных - выводим массив
        echo '<pre>';
        var_dump($str);
    } elseif ($odd > $even) {
        if ($g < $an) {
            $g++;
            goto cycle;
        } elseif ($g == $an) {
            break;
        }
    } else {
        break;
    }
}
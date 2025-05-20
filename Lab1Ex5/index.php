<?php
$mas = [];
$an = 10;
// Задал массив
for ($i=0; $i < $an; $i++){
    $mas[]=rand(-10, 10);
}
echo '<pre>';
var_dump($mas);
// Создал два массива для положительных и отрицательных элементов
$pos = [];
$neg = [];
foreach ($mas as $value){
    if ($value >= 0){
        $pos1 = $value;
        array_push($pos,$pos1);
    }else{
        $neg1 = $value;
        array_push($neg,$neg1);
    }
}
// Нашёл минимальный элемент положительных
$min = min($pos);
echo $min;
$minimal = [$min];
unset($pos[array_search($min,$pos)]);
// Соединил массивы в финальный
$result = array_merge ($neg, $minimal, $pos);
echo '<pre>';
var_dump($result);
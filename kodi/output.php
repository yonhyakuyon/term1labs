<?php
$vvod=$_POST['vvod'];
$do=$vvod;
echo "До обработки: $do";
$s=strlen($vvod);
echo "<pre>Количество символов: $s";
for ($i=0;$i<$s;$i++){
if(isset($mas[$vvod[$i]])){
    $mas[$vvod[$i]]++;
}
else{
    $mas[$vvod[$i]]=1;
}
}
arsort($mas);
echo "<pre>";
var_dump($mas);
echo "<pre>";
$t=0;
foreach ($mas as $key=>$value){
    $b=0;
    for ($z=0;$z<$t;$z++){
        $b='1'.$b;
    }
    $t++;
    $mas[$key]=$b;
}
$x="";
for($w=0;$w<$s;$w++) {
    $x=$x.$mas["$vvod[$w]"];
}
echo "<pre>";
var_dump($mas);
echo "<pre>";
echo $x;
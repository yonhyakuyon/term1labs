<?php
$text = $_POST['text'];
$old_text = $text;
//echo $text;
$word_count =strlen($text);
//print_r($old_text);
for ($i = 0; $i < $word_count; $i++){
    if(isset($res[$text[$i]])){
        $res[$text[$i]]++;
    }
    else {
        $res[$text[$i]] = 1;
    }
}
$i2 = 0;
arsort($res);
foreach ($res as $key => $word){
    $w = 0;
    for ($i4 = 0; $i4<$i2; $i4++){
        $w = '1'.$w;
    }
    $i2 ++;
    $res[$key]=$w;
}

$result = implode('-',$res);
//print_r($res);
require_once 'output.php';
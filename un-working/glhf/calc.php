<?php
$text = $_POST['text'];
echo $text;
$str =str_split($text,1);
$alph = array(
    'A', 'a', 'B', 'b', 'C', 'c', 'D', 'd',
    'E', 'e', 'F', 'f', 'G', 'g', 'H', 'h', 'I', 'i',
    'J', 'j', 'K', 'k', 'L', 'l',
    'M', 'm', 'N', 'n', 'O', 'o',
    'P', 'p', 'Q', 'q', 'R', 'r',
    'S', 's', 'T', 't', 'U', 'u', 'V',
    'v', 'W', 'w', 'X', 'x', 'Y', 'y', 'Z', 'z'
);
//for ($i=0;$i<52;$i++){
//    $current = $alph[$i];
//    $count = mb_substr_count($text,$current);
//    print $count;
////    if ($count != null){
////        $max = max(array($count));
////        echo $max;
////    }
////
//};
print_r($str);


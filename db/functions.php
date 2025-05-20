<?php
function n($sn,$fn){
    if ($fn > $sn) {
        $n = $fn;
    } else {
        $n = $sn;
    }
    return $n;
}


function v ($w, $l, $h){
    $v = $w*$l*$h;
    return $v;
}

function s ($w, $l){
    $s = $w*$l;
    return $s;
}
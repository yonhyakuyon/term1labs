<?php
function swtch ($el11, $el12,$el21, $el22, $matrix1, $matrix2){
    $temp = $matrix1;
    $matrix1[$el21][$el22] = $matrix2[$el11][$el12];
    $matrix2[$el11][$el12] = $temp[$el21][$el22];
    return $matrix1;
    return $matrix2;
}
<?php

function distance($a, $b) {
    
    $alen = strlen($a);
    $errors = 0;

    if ($alen != strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    
    for ($i = 0; $i < $alen; $i++) {
        if ($a[$i] != $b[$i]) {
            $errors++;
        }
    }
    
    return $errors;
}

/*
function distance($a, $b) {
    
    $alen = $count = strlen($a);
    $blen = strlen($b);
    
    if ($alen != $blen) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    
    $arr = str_split($a);
    
    foreach ($arr as $key => $val) {
        if ($val == $b[$key]) {
            $count--;
        }
    }
    
    return $count;
}
*/

function distance2($a, $b)
{
   $length=strlen($a);
    if($length !== strlen($b)){
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    $errorCount=0;
    for($i=0;$i<$length;$i++){
        if($a[$i] !== $b[$i]){
            $errorCount++;
        }
    }
    return $errorCount;
}
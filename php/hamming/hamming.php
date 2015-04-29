<?php
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

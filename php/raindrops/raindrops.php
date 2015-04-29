<?php
function raindrops($num) {
    
    $pf = primefactors($num);
    $res = '';
    
    if (in_array(3, $pf)) $res.= 'Pling';
    if (in_array(5, $pf)) $res.= 'Plang';
    if (in_array(7, $pf)) $res.= 'Plong';
    if (empty($res)) $res = (string)$num;
    
    return $res;
}

function primefactors($num) {
    $sqrt = sqrt($num);
    for ($i = 2; $i <= $sqrt; $i++) {
        if ($num % $i == 0) {
            return array_merge(primefactors($num / $i), array($i));
        }
    }
    return array($num);
}

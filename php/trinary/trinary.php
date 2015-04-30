<?php
function toDecimal($n) {
    
    // Trinary numbers contain three symbols: 0, 1, and 2. Return 0 if input was invalid.
    if (!preg_match('/^[0-2]*$/', $n)) {
        return 0;
    }
    
    // Calculate decimal value from trinary number
    $arr = array_reverse(str_split($n));
    $dec = 0;
    foreach ($arr as $k => $v) {
        $dec+= ($v * pow(3, $k));
    }
    
    return $dec;
}

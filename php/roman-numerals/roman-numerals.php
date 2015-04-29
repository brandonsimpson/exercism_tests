<?php
function toRoman($num) {
    
    // roman numeral => numeric equivalents
    $roman = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $result = '';
    
    foreach ($roman as $r => $val) {
        
        // divide remaining num by the numeric equivalent val to find how many times to repeat roman numeral chars
        $matches = intval($num / $val);

        // build result string of roman numerals
        $result.= str_repeat($r, $matches);
        
        // reduce num by numeric equivalent val
        $num = $num % $val;
    }
    
    return $result;
}

<?php

/**
 * Convert some basic math strings to operations and return calculation results
 * @param $input
 * @return bool|mixed
 */
function calculate($input)
{

    $text = $input;
    $text = str_replace("What is ", "", $text);
    $text = str_replace("?", "", $text);

    $math_operations = [
        'plus' => '+',
        'minus' => '-',
        'multiplied by' => '*',
        'divided by' => '/',
        'raised to the' => '**',
        'th power' => '',
        'to the power of' => '**'
    ];

    /**
     * Check if string contains any of the valid math operations we're able to convert
     */
    if (!contains($text, array_keys($math_operations))) {
        throw new InvalidArgumentException();
    }

    /**
     * Convert math operation strings to symbols
     */
    $equation = str_replace(array_keys($math_operations), array_values($math_operations), $text);

    /**
     * Separate first equations from second
     */
    preg_match_all('!\d+!', $equation, $matches);
    $pos = strpos( $equation, $matches[0][1], strlen($matches[0][0])+1 );
    $equation = '(' . substr_replace($equation, $matches[0][1] . ') ', $pos, strlen($matches[0][1] . ')'));

    /**
     * Eval string only if it's an actual math equation
     */
    if (preg_match('/[^0-9\+\-\*\/\(\)\.]/', $equation)) {
        $value = eval("return ($equation);");
        return $value;
    }

    return false;

}


function contains($text, array $data)
{
    foreach ($data as $d) {
        if (stripos($text, $d) !== false) {
            return true;
        }
    }
    return false;
}

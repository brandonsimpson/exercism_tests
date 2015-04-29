<?php

// return the square of the sum from 1 to N
function squareOfSums($n) {
    return pow(array_sum(range(1, $n)), 2);
}

// return the sum of the squares from 1 to N
function sumOfSquares($n) {
    return array_reduce(range(1, $n), function ($sum, $x) {
        return $sum+= pow($x, 2);
    });
}

// return the difference of squareOfSums and sumOfSquares
function difference($n) {
    return squareOfSums($n) - sumOfSquares($n);
}

<?php

/*
 * Check if year is leap year
 *
 * A leap year occurs:
 * on every year that is evenly divisible by 4
 * except every year that is evenly divisible by 100
 * unless the year is also evenly divisible by 400
*/
function isLeap($year) {
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
}

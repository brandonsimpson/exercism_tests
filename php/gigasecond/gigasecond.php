<?php
function from($date) {
    $gs = pow(10, 9);   
    $date->add(new DateInterval('PT' . $gs . 'S'));
    return $date;
}

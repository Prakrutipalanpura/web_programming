<?php

function calculateCircleArea($radius) {
    
    $area = M_PI * pow($radius, 2);
    return $area;
}


$radius = 4;

$area = calculateCircleArea($radius);

echo "The area of the circle with radius $radius is: $area";

?>
<?php

function findLargest($num1, $num2, $num3) {
    $largest = $num1;

    if ($num2 > $largest) {
        $largest = $num2;
    }

    if ($num3 > $largest) {
        $largest = $num3;
    }

    return $largest;
}


$number1 = 10;
$number2 = 20;
$number3 = 35;

$largestNumber = findLargest($number1, $number2, $number3);

echo "The largest among $number1, $number2, and $number3 is: $largestNumber";

?>
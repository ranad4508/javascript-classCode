<?php
// WAP to reverse a number by calling a function.
function reverseNumber($number) {
    $reverse = 0;
    while ($number != 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }
    echo "Reverse of a number is $reverse";
}
reverseNumber(74835);
?>

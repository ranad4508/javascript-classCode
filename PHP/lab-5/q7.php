<?php
// WAP to find the factorial of a number by calling a function.
function factorial($n) {
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5;
$result = factorial($number);
echo "The factorial of $number is: $result";
?>

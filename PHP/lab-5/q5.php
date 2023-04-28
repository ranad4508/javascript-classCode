<?php
// WAP to give an example of recursive function.
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo "Factorial : ". factorial(5);
?>
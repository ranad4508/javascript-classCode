<?php
// WAP to find the product of two numbers by declaring and calling a function.
function multiply($num1, $num2) {
    return $num1 * $num2;
}

$product = multiply(5, 7);

echo "The product is: " . $product;
?>
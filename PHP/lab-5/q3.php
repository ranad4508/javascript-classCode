<?php
// WAP to show the example of default values in function.

function addition($a = 5, $b = 3){
    $sum = $a + $b;
    echo "Sum is: ".$sum;
}
addition();
?>
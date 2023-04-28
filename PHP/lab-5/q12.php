<?php
// WAP to define the use of $GLOBALS[index] array.
$x = 9;

function myFunction() {
    $y = 11;
    echo "x = " . $GLOBALS['x'] . "<br>";
    echo "y = $y <br>";
}

myFunction();
?>

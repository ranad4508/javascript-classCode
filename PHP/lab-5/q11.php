<?php
// WAP to define the use of global keyword.
$x = 5; 

function myFunction() {
    global $x;
    $y = 10; 
    echo "x = $x <br>"; 
    echo "y = $y <br>"; 
}

myFunction();
?>

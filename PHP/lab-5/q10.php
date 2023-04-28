<?php
// WAP to explain the concept of global scope.
$x = 10;
function myFunction() {
    global $x;
    echo "Value inside the function: $x <br>";
}

myFunction();
echo "Value outside the function: $x <br>";
?>

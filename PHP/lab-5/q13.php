<?php
// WAP to define the use of static keyword.
function myFunction() {
    static $count = 0;
    
    $count++;
    echo "Function called $count times. <br>";
}

myFunction(); 
myFunction(); 
myFunction(); 
?>

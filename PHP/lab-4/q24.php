<?php
// WAP to define an array and display its selected part.
$arr = array("Yellow", "Green","Orange","red", "Pink", "purple", "Blue");
$selection = array_slice($arr, 1, 4);
print_r($selection);

?>
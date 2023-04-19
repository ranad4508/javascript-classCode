<?php
// WAP to define an array and display its selected part.
$arr = array("red", "Yellow", "Green", "Blue","Orange", "Pink", "purple");
$selection = array_slice($arr, 1, 4);
print_r($selection);

?>
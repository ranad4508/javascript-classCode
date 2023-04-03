<?php 

$arr = array("red", "Yellow", "green", "Blue","Orange", "Pink");
print_r(array_slice($arr, 2));//it will slice or display elements starting from the given index
echo "<br>";


$array = array("red", "Yellow", "green", "Blue","Orange", "Pink");
print_r(array_slice($array, -5, 3));//it counts elements from reverse order first and then serial and display from yellow to blue
echo "<br>";


$array = array("red", "Yellow", "green", "Blue","Orange", "Pink");
print_r(array_slice($array, 1, 2, true));//it preserve parameter set to true, or the original index
echo "<br>";




?>
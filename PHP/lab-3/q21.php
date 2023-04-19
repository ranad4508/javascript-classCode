<?php
// WAP to define an array and remove the first element of the array.
$name = array("Dinesh", "Jyoti", "Bibek", "Reshma");
array_shift($name);
foreach($name as $value){
    echo $value;
    echo "<br>";
}
?>
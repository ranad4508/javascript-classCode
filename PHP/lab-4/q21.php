<?php
// WAP to define an array and remove the first element of the array.
$name = array("Roshni", "Jyoti", "Bibek", "Smriti");
array_shift($name);
foreach($name as $value){
    echo $value;
    echo "<br>";
}
?>
<?php
// WAP to define an array and insert element at the beginning of the array.
$name = array("Roshni", "Jyoti", "Bibek", "Smriti");
array_unshift($name, "Luffy");
foreach($name as $value){
    echo $value;
    echo "<br>";
}
?>
<?php
// WAP to define an array and remove its last element.
$name = array("Roshni", "Jyoti", "Bibek", "Smriti");
array_pop($name);
foreach($name as $value){
    echo $value;
    echo "<br>";
}
?>
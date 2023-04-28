<?php
// WAP to define an array and insert elements at the end of the array.
$name = array("Roshni", "Jyoti", "Bibek", "Smriti");
array_push($name, "Luffy");
foreach($name as $value){
    echo $value;
    echo "<br>";
}
?>
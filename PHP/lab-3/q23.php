<?php
// WAP to define an array and remove its last element.
$name = array("Dinesh", "Jyoti", "Bibek", "Reshma");
array_pop($name);
foreach($name as $value){
    echo $value;
    echo "<br>";
}
?>
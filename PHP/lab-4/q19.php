<?php
// WAP to define an associative array and display its elements in descending order
// according to key.
$arr = array("Name"=>"Roshni", "Age"=>"22", "Address"=>"Koteshwor");
krsort($arr);
foreach($arr as $key => $value){
    echo "Key = ".$key.", Value = ".$value;
    echo "<br>";
}
?>
<?php
// WAP to define an associative array and display its elements in descending order
// according to value.
$arr = array("Name"=>"Roshni", "Age"=>"22", "Address"=>"Koteshwor");
arsort($arr);
foreach($arr as $key => $value){
    echo "Key = ".$key.", Value = ".$value;
    echo "<br>";
}
?>
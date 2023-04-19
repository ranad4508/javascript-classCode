<?php
//WAP to define an associative array and display its elements in ascending order
// according to key. 
$arr = array("Name"=>"Dinesh", "Age"=>"23", "Address"=>"Koteshwor");
ksort($arr);
foreach($arr as $key => $value){
    echo "Key = ".$key.", Value = ".$value;
    echo "<br>";
}
?>
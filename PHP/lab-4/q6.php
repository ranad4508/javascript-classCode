<?php
// WAP to define an associative array and display its key and value.
$arr = array("Name"=>"Roshni", "Age"=>"22", "Address"=>"Koteshwor");
foreach($arr as $key => $value){
    echo "$key => $value<br>";
}
?>
<?php
// WAP to define an associative array and display its key and value.
$arr = array("Name"=>"Dinesh", "Age"=>"23", "Address"=>"Koteshwor");
foreach($arr as $key => $value){
    echo "$key => $value<br>";
}
?>
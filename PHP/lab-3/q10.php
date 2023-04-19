<?php
// WAP to define a multidimensional array that contains three associative arrays as its
// elements and display its members.
$arr = array(
    array("Name"=>"Dinesh", "Age"=>"23", "Address"=>"Koteshwor"),
    array("Name"=>"Roshni", "Age"=>"22", "Address"=>"Koteshwor"),
    array("Name"=>"John", "Age"=>"22", "Address"=>"Onigashima")
);
foreach($arr as $key => $value){
    foreach($value as $sub_key => $sub_value){
        echo $sub_key.": ".$sub_value."<br>";
    }
    echo "<br>";
}
?>
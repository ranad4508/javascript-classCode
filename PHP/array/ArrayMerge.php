<?php
$fruits = array("Apple","Banana","Kiwi","Mango","Litchi");
$vegetabales = array("Spinach","Tomato","Cucumber","Raddish");

$merge = array_merge($fruits,$vegetabales);//when both have same key name the information is lost
print_r($merge);
?>
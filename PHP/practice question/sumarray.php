<?php

$arr1 = array(5, 7, 9, 10, 12);
$arr2 = array(6, 8, 12, 4, 6);
$sum = 0;
for($i=0; $i<count($arr1); $i++){
    $sum =$sum+ $arr1[$i]+$arr2[$i];
}
echo "Sum of two array is: $sum";
/*** practice question *** 
1. create a registration form and validate using javascript
    -name is required and must be 8 character
    -password and confirm password is required and should match
    -phone is required and must be number with 10 digit
    -email is required and must be in email format
    -date of birth is required with format of yyyy/mm//dd
    -gender must be selected

2. wap in js to print largest and smallest among 10 elements of an array 
2. wap in php to print largest and smallest among 10 elements of an array 

*/ 
?>
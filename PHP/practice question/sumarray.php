<?php

$arr1 = array(5, 7, 9, 10, 12);
$arr2 = array(6, 8, 12, 4, 6);
$sum = 0;
for($i=0; $i<count($arr1); $i++){
    $sum =$sum+ $arr1[$i]+$arr2[$i];
}
echo "Sum of two array is: $sum";
?>
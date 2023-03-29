<?php

$array  = array("one", 2, "three", 4, "five");
echo "Before using unset() function we have ".count($array)." elements<br>";
unset($array[2]);
echo "After using unset() function we have ".count($array)." elements<br>";
foreach($array as $value){
    echo "$value<br>";
}


?>
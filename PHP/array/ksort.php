<?php

$cars = array("Volvo"=>20, "BMW"=>2, "MOTI"=>11, "VITTI"=>39, "RESHMA"=>4);
ksort($cars);//it sorts associative array according to the key in ascending order

foreach($cars as $key => $value){
    echo "Key = ".$key.", Value = ".$value;
    echo "<br>";
}

?>
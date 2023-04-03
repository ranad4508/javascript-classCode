<?php

$cars = array("Volvo"=>20, "BMW"=>2, "MOTI"=>11, "VITTI"=>39, "RESHMA"=>4);
asort($cars);//it sorts associative array according to value in ascending prder

foreach($cars as $key => $value){
    echo "Key = ".$key.", Value = ".$value;
    echo "<br>";
}

?>
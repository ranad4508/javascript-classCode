<?php

$cars = array("Volvo"=>20, "BMW"=>2, "MOTI"=>11, "VITTI"=>39, "RESHMA"=>4);
arsort($cars);//it sorts associative array according to the value in descending order

foreach($cars as $key => $value){
    echo "Key = ".$key.", Value = ".$value;
    echo "<br>";
}

?>
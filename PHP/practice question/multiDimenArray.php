<?php
$multi = array(
    "Kathmandu" => array("Newroad", "Durbar Marg", "Thamel"),
    "Lalitpur" => array("Patan", "Jawlakhel", "Kupondole"),
    "Bhaktapur" => array("Durbar square", "Suryabinayak")
);
foreach($multi as $value){
    foreach($value as $v){
        echo "$v<br>";
    }
}
?>
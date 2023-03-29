<?php


$multi = array(
   "arr1"=> array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5),
    "arr2"=>array("first"=>"A", "second"=>"B", "third"=>"C", "fourth"=>"D","fifth"=>"E")
);
foreach($multi as $value){
    foreach($value as $v){
        echo "$v<br>";
    }
}





?>
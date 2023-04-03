<?php
$a = array("a"=> 12, "b"=>13, "c"=> 14);
$b = array("a"=>14, "d"=>15, "e"=>16);
$c = array_merge_recursive($a,$b);//merges the key into array having same key or index
print_r($c);
?>
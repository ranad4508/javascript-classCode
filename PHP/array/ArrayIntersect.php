<?php
$myarray1 = array(20,30,40,-50,-41);
$myarray2 = array(10,30,-50,88,50);

$discard = array_intersect($myarray1,$myarray2);
print_r($discard);
?>
<?php
// WAP to define an array and display its elements in ascending order.
$arr = array('apple', 'banana', 'orange', 'grapes');
sort($arr);
foreach($arr as $value){
    echo "$value<br>";
}
?>
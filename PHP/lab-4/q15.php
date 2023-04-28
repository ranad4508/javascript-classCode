<?php
// WAP to define an array and display its elements in descending order.
$arr = array('apple', 'banana', 'orange', 'grapes');
rsort($arr);
foreach($arr as $value){
    echo "$value<br>";
}
?>
<?php
//global variable
$fnum = 20;
function addNum(){
    $sum = 0;
    global $fnum;
    $sum = $fnum + 20;
    echo "The sum is $sum<br>";
}
addNum();
//echo $fnum;
?>
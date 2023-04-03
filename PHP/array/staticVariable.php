<?php
function myTest(){
    static $x = 0; //to store value of variable even after execution
    echo $x;
    $x++;
}
myTest(); // 0
echo"<br>";
myTest(); // 1
echo"<br>";
myTest(); // 2
echo"<br>";
?>
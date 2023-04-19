<?php
// WAP to create a multidimensional array and display all its elements.
$arr = array(
    array(1, 2, 3),
    array(3, 4, 5)
);
echo "Multi-dimensional array: <br>";
foreach($arr as $value){
    foreach($value as $v){
        echo $v." ";
    }
    echo "<br>";
}
?>
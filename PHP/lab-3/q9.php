<?php
// WAP to define a multidimensional array and display its elements in a table.
$arr = array(
    array(1, 2, 3),
    array(3, 4, 5)
);
echo "<table border='1px solid'>";

foreach($arr as $value){
    echo "<tr>";
    foreach($value as $v){
        echo "<td>";
        echo $v." ";
        echo "</td>";
    }
    echo "<br>";
    echo "</tr>";
}

echo "</table>";
?>
<?php
// WAP to define a numeric array and display its elements in a table.
$arr = array(4, 5, 6, 9, 1);
echo "Array elements: <br>";
echo "<table border='1px solid'>";
echo "<tr>";
for($i = 0; $i<count($arr); $i++){
    echo "<td>";
    echo $arr[$i]."<br>";
    echo "</td>";
}
echo "</tr>";
echo "</table";


?>
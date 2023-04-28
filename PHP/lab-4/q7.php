<?php
// WAP to define an associative array and display its elements in a table.
echo "<table border='1px solid'>";
echo "<tr>";
$arr = array("Name"=>"Roshni", "Age"=>"22", "Address"=>"Koteshwor");
foreach($arr as $value){
    echo "<td>";
    echo "$value<br>";
    echo "</td>";
}
echo "</tr>";
echo "</table>";

?>
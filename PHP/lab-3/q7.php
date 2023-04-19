<?php
// WAP to define an associative array and display its elements in a table.
echo "<table border='1px solid'>";
echo "<tr>";
$arr = array("Name"=>"Dinesh", "Age"=>"23", "Address"=>"Koteshwor");
foreach($arr as $value){
    echo "<td>";
    echo "$value<br>";
    echo "</td>";
}
echo "</tr>";
echo "</table>";

?>
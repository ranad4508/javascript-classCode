<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$arr = array("Bachelor in Information Management", "Bachelor in Business Admnistration", "Bachelor in Business Studies");
echo "<ol type='a' start='1'>";
foreach($arr as $value){
    
    echo "<li>$value</li>";
    
}
echo "</ol>";
echo "<table border='1px solid'>";
foreach($arr as $value){
    echo "<tr>";
    echo "<td>";
    echo "$value";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
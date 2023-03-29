<?php
$arrname[0] = 'Hello';
$arrname[1]  = "World";
echo $arrname[0]." ".$arrname[1]."<br>";

$arr_name = array(12, 'Dinesh', 14, 15);
foreach($arr_name as $key=>$value){
    echo $key.$value;
    echo "<r>";
}

$arr = ["value1", "value2", "value3"];
for($i = 0; $i<count($arr); $i++){
    echo "$arr[$i]<br>";
}
?>
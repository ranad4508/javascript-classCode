<?php

$cars = array("Volvo", "BMW", "MOTI", "VITTI", "RESHMA");
rsort($cars);

$clength = count($cars);
for($x = 0; $x<$clength; $x++){
    echo "<b>$cars[$x]</b>";
    echo "<br>";
}

?>
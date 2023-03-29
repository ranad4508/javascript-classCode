<?php

$arr = array("p"=>20,"q"=>21,"r"=>90,"s"=>20);
echo array_search(20, $arr);
?>
<?php
$arr = array("p"=>20,"q"=>21,"r"=>90,"s"=>20);
echo array_search(21, $arr, true);
?>
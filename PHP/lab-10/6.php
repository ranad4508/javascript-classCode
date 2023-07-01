<?php
session_start();
$_SESSION["favcolor"] = "Black ";

session_destroy();
echo "Session variable is deleted" ;
?>
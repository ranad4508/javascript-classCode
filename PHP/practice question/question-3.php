<?php
session_start();
$_SESSION['Name']="dinesh";
$_SESSION['Address']='Lalitpur';

echo $_SESSION['Name']." and ".$_SESSION['Address']."<br>";
?>


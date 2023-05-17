<?php
session_start();
session_destroy();
echo $_SESSION['Name']." and ".$_SESSION['Address']."<br>";

?>
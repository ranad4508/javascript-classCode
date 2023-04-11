<?php

$path = '/PHP/fileUpload/basename.php';
//show file name with file extension
echo basename($path)."<br>";
//show file name without file extension
echo basename($path, ".php");
?>
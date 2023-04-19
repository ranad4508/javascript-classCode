<?php
$file = "first_file.txt";
if(file_exists($file)){
    $handle = fopen($file, "r") or die("Error opening a file");
    $line = fread($handle, 22);
    echo $line;
}
else{
    echo "Your file does not exist";
}
?>
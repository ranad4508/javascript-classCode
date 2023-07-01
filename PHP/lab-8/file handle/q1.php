<?php
$file = "file.txt";
if(file_exists($file)){
    $handle = fopen($file, "r") or die("Cannot open file");
    $line = fread($handle, 20);
    echo "$line";
    fclose($handle);
}
else{
    echo "Your file does not exists";
}
?>
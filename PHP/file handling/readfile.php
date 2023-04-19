<?php
$file = "first_file.txt";
if(file_exists($file)){
    readfile($file) or die("Error in opening a file");
}
else{
    echo "Error! Your file does not exist";
}
?>
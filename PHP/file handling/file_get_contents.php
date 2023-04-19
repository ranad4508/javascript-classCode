<?php
$file = "first_file.txt";
if(file_exists($file)){
    $content = file_get_contents($file) or die("Error in opening a file");
    echo $content;
}
else{
    echo "Error! your file does not exists";
}
?>
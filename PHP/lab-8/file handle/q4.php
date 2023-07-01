<?php

$file = "file.txt";
if(file_exists($file)) {
    if(rename($file,"bca.txt"))
    {
        echo "File renamed sucessfully";
    }
    else {
        echo "Error: File cannot be renamed";
    }
}


?>
<?php

$file = "bca.txt";
if(file_exists($file)) {
    if(unlink($file))
    {
        echo "File deleted sucessfully";
    }
    else {
        echo "Error: File cannot be deleted";
    }
}
?>
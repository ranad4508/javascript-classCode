<?php
$file = "newFile.txt";
if (file_exists($file)) {
    if (unlink($file)) {
        echo "File deleted";
    } else {
        echo "Failed to delete file";
    }
} else {
    echo "File does not exists";
}

?>
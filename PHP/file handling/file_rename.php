<?php
$file = "new_file.txt";
if(file_exists($file)){
    if(rename($file, "second_file.txt")){
        echo "Renamed successfully";
    }
    else{
        echo "Error: File cannot be renamed";
    }
}
else{
    echo "File does not exists";
}

?>
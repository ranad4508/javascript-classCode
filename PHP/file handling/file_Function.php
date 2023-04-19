<?php
$file = "first_file.txt";
if(file_exists($file)){
    $line = file($file) or die("Cannot open the file");
    foreach($line as $line){//when we use file function the data are returned as array
        echo $line;
    }
}
else{
    echo "Error: File doesn't exists";
}

?>
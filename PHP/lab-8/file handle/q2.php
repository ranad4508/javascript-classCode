<?php
$file1 = "file.txt";

if(file_exists($file1)){
    readfile($file1) or die("Error cannot open file");
   echo "<br> <br>";
    $content = file_get_contents($file1) or die("Error opening file");
    echo $content ."<br>";

    $lines = file($file1) or die("Cannot open the file");
    foreach($lines as $line){
        echo $line."<br>";
    }


}
else{
    echo "Your file does not exists";
}
?>
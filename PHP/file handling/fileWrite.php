<?php
$file = "first_file.txt";
$data = "This is example of file handling";
$open = fopen($file, "w") or die("Error! cannot open a file");
fwrite($open, $data);
fclose($open);
echo "Data written to file successfully";
?>
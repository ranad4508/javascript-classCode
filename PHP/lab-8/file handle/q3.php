<?php
$file = "file3.txt";
$data = "We are BCA Fourth Students";
$open = fopen($file, "w") or die("Error! cannot open a file");
fwrite($open, $data);
fclose($open);
echo "Data written to file successfully";
?>
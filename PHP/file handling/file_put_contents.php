<?php
$file = "new_file.txt";
$data = "Hi we are studying scripting language in bca fourth";
file_put_contents($file, $data) or die("Error! Cannot write in file");
echo "Date written in file successfully";
?>
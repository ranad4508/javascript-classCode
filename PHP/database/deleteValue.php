<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "DELETE from student where sid = 2";

if($conn->query($sql)===true){
    echo "Value deleted successfully";
}
else{
    echo "Failed to delete value".$conn->error;
}
$conn->close();
?>
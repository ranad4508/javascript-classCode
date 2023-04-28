<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT into student(sid, sname, saddress, phone) 
values(01, 'Dinesh', 'Koteshwor', 9865747518),
(02, 'Jyoti', 'Koteshwor', 9865747000)";

if($conn->query($sql)===true){
    echo "Data Successfully inserted into table";
}
else{
    echo "Failed to insert data into table".$conn->error;
}
$conn->close();
?>
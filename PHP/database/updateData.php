<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "UPDATE student set phone=0980980800 where sid=10";
if($conn->query($sql)===TRUE){
    echo "Record updated successfully";
}
else{
    echo "Failed to update record".$conn->connect_error;
}
$conn->close();
// payment table
/* use form for input
pid, pdate, mode, sid(fk)
*/ 
?>
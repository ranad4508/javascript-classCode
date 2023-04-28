<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "CREATE database BCA_Fourth";
if($conn->query($sql)=== TRUE){
    echo "Database Created successfully";
}
else{
    echo "Failed to create database".$conn->error;
}
$conn->close();
?>
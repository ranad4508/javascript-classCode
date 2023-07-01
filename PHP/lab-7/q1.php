<?php
// Write a PHP program to create a database named db_studentinfo.
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "CREATE database db_studentinfo";
if($conn->query($sql)=== TRUE){
    echo "Database Created successfully";
}
else{
    echo "Failed to create database".$conn->error;
}
$conn->close();
?>
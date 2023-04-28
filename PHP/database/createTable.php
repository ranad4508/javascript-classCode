<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

// $sql = "CREATE table student(
//     sid int primary key,
//     sname varchar(12) not null,
//     saddress varchar(10) not null,
//     phone bigint
// )";




if($conn->query($sql)===true){
    echo "Table created successfully";
}
else{
    echo "Failed to create database".$conn->error;
}
$conn->close();
?>
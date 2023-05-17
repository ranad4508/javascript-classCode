<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'students';

$conn = new mysqli($server, $username, $password, $database);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
else{
    echo "Connected successfully";
}

// $sql = "CREATE database students";
// $conn->query($sql);

$sql = "CREATE table user(

    id int primary key auto_increment, 
    name varchar(30) not null,
    address varchar(30) not null,
    email varchar(30) not null,
    image varchar(30)
)";6

$conn->query($sql);
?>
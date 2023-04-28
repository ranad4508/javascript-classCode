<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
// $sql = "CREATE table MyGuests (
//     id int primary key,
//     firstname varchar(30) not null,
//     lastname varchar(30) not null,
//     working_hour numeric not null,
//     gdate date not null
// )";
$sql = "SELECT id, firstname, lastname FROM MyGuests where working_hour in (SELECT AVG(working_hour) FROM MyGuests)";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "id: ".$row['id']."-Name ".$row['firstname']." ".$row['lastname']."<br>";
    }
}
else{
    echo "0 Results";

}
// if($conn->query($sql)===true){
//     echo "Table created successfully";
// }
// else{
//     echo "Failed to create database".$conn->error;
// }
$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "bca_fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT max(salary) from employee";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "Salary max: ".$row['max(salary)'];
}
$conn->close();
?>
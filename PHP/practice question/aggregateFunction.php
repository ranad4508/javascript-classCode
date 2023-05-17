<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT count(sname) from student";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    echo "Total count ".$row['count(sname)'];
}
$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT sid, sname, saddress, phone from student";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "id: ".$row['sid']." - Name: ".$row['sname']." - Address: ".$row['saddress']." - Phone: ".$row['phone']."<br>";  
    }
}
else{
    echo "0 results";
}
$conn->close();
?>
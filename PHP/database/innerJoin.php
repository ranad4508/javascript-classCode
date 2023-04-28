<?php
$conn = new mysqli("localhost", "root", "", "BCA_Fourth");
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT payment.pid, student.sid, payment.mode, student.sname
from payment
inner join student on payment.pid = student.sid where student.sid = 1";
$result = $conn->query($sql);
if($result->num_rows>0){
    $data=[];
    while($row = $result->fetch_assoc()){
        array_push($data, $row);
    }
}
print_r($data);
$conn->close();
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_studentinfo";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "DELETE from student where id=4";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting name: " . $conn->error;
}

// Close the connection
$conn->close();

?>
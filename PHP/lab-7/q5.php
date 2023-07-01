<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_studentinfo";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "UPDATE student SET name='Shiva Thapa' WHERE id=5";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Name updated successfully";
} else {
    echo "Error updating name: " . $conn->error;
}

// Close the connection
$conn->close();

?>

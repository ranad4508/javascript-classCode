<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_studentinfo";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "CREATE TABLE student (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(200) NOT NULL,
    email VARCHAR(100) NOT NULL,
    image VARCHAR(100)
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();

?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $conn = new mysqli("localhost","root","","bca_fourth",);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Insert data into MySQL table
    $sql = "INSERT INTO person (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        $response = 'Data inserted successfully.';
    } else {
        $response = 'Error: ' . $conn->error;
    }
    
    $conn->close();
    
    // Send the response back to the AJAX request
    echo $response;
}
?>

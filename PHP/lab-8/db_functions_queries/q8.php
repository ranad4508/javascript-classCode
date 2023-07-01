<?php

$conn = mysqli_connect("localhost", "root", "", "bca_fourth");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query with ORDER BY and GROUP BY
$sql= "SELECT employee.id, employee.username
FROM employee 
INNER JOIN student ON employee.id = student.id";

// Execute the query
$result = $conn->query($sql);

// Display the results
while($row = mysqli_fetch_array($result)){
    echo "Emplyee :". $row['username'];
      echo "<br />";
}
// Close the database connection
$conn->close();
?>

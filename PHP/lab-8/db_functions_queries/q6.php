<?php

$conn = mysqli_connect("localhost", "root", "", "bca_fourth");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query with ORDER BY and GROUP BY
$sql= "SELECT username, avg(salary) FROM employee GROUP BY username ORDER BY id ASC";

// Execute the query
$result = $conn->query($sql);

// Display the results
while($row = mysqli_fetch_array($result)){
    echo "Emplyee ". $row['username']. " = ". $row['avg(salary)'];
      echo "<br />";
}
// Close the database connection
$conn->close();
?>

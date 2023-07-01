<?php

$conn = mysqli_connect("localhost", "root", "", "bca_fourth");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query with ORDER BY and GROUP BY
$sql= "SELECT username from employee where id in(select id from employee where id<4)";

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

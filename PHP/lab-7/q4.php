<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_studentinfo";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
// SQL query to retrieve data from the table
$sql = "SELECT * FROM student";

// Execute the query
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<body>
    <h2>Student Data</h2>
    <table border="1px solid">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Image</th>
        </tr>
        <?php
        // Check if there are any rows returned from the query
        if ($result->num_rows > 0) {
            // Loop through each row of data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["image"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>

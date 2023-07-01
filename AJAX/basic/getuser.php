<?php
$q = intval($_GET['q']);
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_errno !=0){
    die('Could not select database');
}

$sql = "SELECT * from student where id='".$q."'";
$result = mysqli_query($conn, $sql);
echo "<table> 
<tr>
<th>Name </th>
<th>Address</th>
</tr>
";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "</tr>";
}
?>
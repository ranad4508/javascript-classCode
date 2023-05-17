<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "BCA_Fourth";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_errno != 0) {
    die('Could not select database');
}

$query = "SELECT * from student";
$result = $conn->query($query) or die('Query Failed');

?>
<script>
    function showUser(str) {
        if (str == '') {
            document.getElementById('txtHint').innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('txtHint').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "userRecords.php?q=" + str, true);
        xmlhttp.send();
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <label for="selectPerson">Select a person</label>
    <select name="user" id="" onchange="showUser()">
        <option value="0">Please select </option>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['sid'] . '">' . $row['sname'] . '</option>';
        }
        ?>
    </select>
    <div id="txtHint"><b>Person info will be displayed</b></div>
</body>

</html>
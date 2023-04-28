<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        SID: <input type="text" name="sid"> <br>
        Name: <input type="text" name="name"> <br>
        Address: <input type="text" name="address"> <br>
        Phone: <input type="text" name="phone"> <br>
        <input type="submit" value="Submit" name="submit">

    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "BCA_Fourth";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['submit'])) {
        $sid = $_POST['sid'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];

        $sql = "INSERT into student(sid, sname, saddress, phone) 
        values($sid, '$name', '$address', $phone)";
        if($conn->query($sql)===true){
            echo "Data Successfully inserted into table";
        }
        else{
            echo "Failed to insert data into table".$conn->error;
        }
        $conn->close();
    }
    ?>
</body>

</html>
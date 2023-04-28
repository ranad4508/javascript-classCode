<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "BCA_Fourth";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $sql = "CREATE table payment(
    //     pid int primary key,
    //     pdate date not null,
    //     mode varchar(20) not null,
    //     sid int,
    //     foreign key(sid) references student(sid)
    // )";
    
    //for selecting sid
    
    if (isset($_POST['submit'])) {
        $pid = $_POST['pid'];
        $pdate = $_POST['pdate'];
        $mode = $_POST['mode'];
        $sid = $_POST['sid'];

        $sql = "INSERT into payment(pid, pdate, mode, sid) 
        values($pid, '$pdate', '$mode', $sid)";
        if ($conn->query($sql) === true) {
            echo "Data Successfully inserted into table";
        } else {
            echo "Failed to insert data into table" . $conn->error;
        }
        $conn->close();
    }
    ?>
    <form action="" method="post">
        PID: <input type="text" name="pid"> <br>
        Date: <input type="text" name="pdate"> <br>
        Mode: <input type="text" name="mode"> <br>
        SID: <select name="sid" id="">
            <option value="0">Select SID</option>
            <?php
            $sql = "SELECT sid from student";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['sid']; ?>">
                        <?php echo $row['sid']; ?>
                    </option>
                    <?php
                }
            }
            ?>
        </select> <br>
        <input type="submit" value="Submit" name="submit">

    </form>
    
</body>

</html>
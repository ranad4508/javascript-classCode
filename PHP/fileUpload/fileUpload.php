<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload: <input type="file" name="fileupload">
        <input type="submit" value="Upload" name="submit">
    </form>
    <?php
    // for insert into database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "BCA_Fourth";
    
    $conn = new mysqli($servername, $username, $password, $db_name);
    
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    // for insert into database

    if (isset($_POST['submit'])) {
        $target_dir = "./upload/";
        $target_file = $target_dir . basename($_FILES['fileupload']['name']);
        $fileuploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filename = basename($_FILES['fileupload']['name']);
        //check if files already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists";
            $fileuploadOk = 0;
        }

        //check file size
        if ($_FILES['fileupload']['size'] > 50000000) {
            echo "Sorry, your file is too large";
            $fileuploadOk = 0;
        }

        //allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG and GIF files are only allowed";
            $fileuploadOk = 0;
        }
        //check if $fileuploadOk is set to 0 by an error
    
        if ($fileuploadOk == 0) {
            echo "Sorry, Your file was not uploaded";
        }
        //if everything is ok, try to upload a file
        else {
            if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_file)) {
                echo "The file" . basename($_FILES['fileupload']['name']) . " has been successfully uploaded";
                // $sql = "INSERT into payment()";
            } else {
                echo "Sorry, there was an error";
            }
        }
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <form action="" method="post">
        First Name: <input type="text" name="fname"><br>
        Last Name: <input type="text" name="lname"><br>
        Phone Number: <input type="number" name="phone"><br>
        Education: <input type="text" name="education"><br>
        Gender: 
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <br>

        Message: <textarea name="message" id="" cols="30" rows="10" placeholder="Leave a message"></textarea><br><br>

        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    echo "First Name: $fname <br>";
    echo "Last Name: $lname <br>";
    echo "Phone: $phone <br>";
    echo "Education: $education <br>";
    echo "Gender: $gender <br>";
    echo "Message: $message";
}
?>
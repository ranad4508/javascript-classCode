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
        Name: <input type="text" name="name"> <br><br>
        Phone: <input type="text" name="phone"><br><br>
        Address: <input type="text" name="address"><br><br>
        <input type="submit" value="Send" name="submit">
    </form>
    <?php
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
    }
    
    ?>
</body>
</html>

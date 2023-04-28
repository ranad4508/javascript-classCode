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
        Username:
        <input type="text" name="name"><br>
        <input type="submit" name="submit">

    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        if(!empty($name)){
            setcookie("username", $name, time()+1*24*3600, "/","", 0);
            echo $_COOKIE['username'];
        }
    }
    ?>
</body>
</html>
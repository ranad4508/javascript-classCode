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
        <input type="text" name="name" id=""><br>
        Password:
        <input type="password" name="password"><br>
        <input type="submit" value="login" name="submit">
    </form>
    <?php
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];

        if($name == 'admin' || $password =='admin'){
            $_SESSION['name'] = "admin";
            echo "Welcome ".$_SESSION['name'];
        }
        else{
            echo "Enter correct username and password";
        }

    }
    ?>
</body>
</html>
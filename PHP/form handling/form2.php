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
        User name: <input type="text" name="name"><br>
        Password: <input type="password" name="pwd"><br>
        Gender: <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female <br>
        <input type="submit" value="Send Info" name="submit">
    </form>
    <?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $pass = $_POST['pwd'];
        $gender = $_POST['gender'];

        switch ($gender) {
            case 'Male':
                echo "Hello Mr." . $name . "<br>";
                echo "Your name is $name<br>";
                echo "Your password is $pass";
                break;
                
            case 'Female':
                echo "Hello Mrs." . $name . "<br>";
                echo "Your name is $name<br>";
                echo "Your password is $pass";
            
            default:
                echo "Please verify your gender";
        }
    }

    ?>
</body>

</html>
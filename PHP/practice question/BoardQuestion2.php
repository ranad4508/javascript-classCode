<!-- wap in php to handle exception when user enters a value less than 18 in textbox that 
collects age information and display a message you are not eligible for this course.-->
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
        Enter your age:
        <input type="text" name="age">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $age = $_POST['age'];

        function checkAge($age){
            if($age<18){
                throw new Exception('You are not eligible for this course');
            }
            return true;
        }
        checkAge($age);
    }
    ?>
</body>
</html>
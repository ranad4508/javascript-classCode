<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
</head>
<body>
    <form action="" method="post">
        Enter Fahrenheit: <input type="number" name="fahrenheit"><br>

        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit-32)*(5/9);

    echo $fahrenheit."°F"." is ".$celsius."°C";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculations</title>
</head>
<body>
    <form action="" method="post">
        Enter 1st number: <input type="number" name="num1"><br>
        Enter 2nd number: <input type="number" name="num2"><br>

        Operations:
        <input type="radio" name="opt" value="add">Addition
        <input type="radio" name="opt" value="sub">Subtraction
        <input type="radio" name="opt" value="mul">Multiply
        <input type="radio" name="opt" value="div">Divide
        <input type="radio" name="opt" value="avg">Average
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result ='';

    $opt = $_POST['opt'];
    switch($opt){
        case 'add':
            $result = $num1 + $num2;
            echo "Addition: $result";
            break;
        case 'sub':
            $result = $num1 - $num2;
            echo "Subtraction: $result";
            break;
        case 'mul':
            $result = $num1 * $num2;
            echo "Multiplication: $result";
            break;
        case 'div':
            $result = $num1 / $num2;
            echo "Division: $result";
            break;
        case 'avg':
            $result = ($num1 + $num2)/2;
            echo "Average: $result";
            break;
        default:
            echo "Invalid option";
    }
}
?>
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
    if(isset($_POST['submit'])){
        $one = $_POST['one'];
        $two = $_POST['two'];
        $operation = $_POST['arithmetic'];

        // $sum = $one+$two;
        // echo "Sum of $one and $two is :".$sum;

        switch($operation){
            case 'add':
                $result = $one+$two;
                // echo $result;
                break;
            
            case 'subtract':
                $result = $one-$two;
                // echo $result;
                break;
            case 'multiply':
                $result = $one*$two;
                // echo $result;
                break;
            case 'divide':
                $result= $one/$two;
                // echo $result;
                break;
            case 'modulus':
                $result = $one%$two;
                // echo $result;
                break;
            default:
                echo "Invalid input";
                break;
        }

    }
    
    ?>
    <form action="" method="POST">
        Enter 1st Number: <input type="number" name="one"><br>
        Enter 2nd Number: <input type="number" name="two"><br>
        <input type="radio" name="arithmetic" value="add">Addition
        <input type="radio" name="arithmetic" value="subtract">Subtract
        <input type="radio" name="arithmetic" value="multiply">Multiply
        <input type="radio" name="arithmetic" value="divide">Divide
        <input type="radio" name="arithmetic" value="modulus">Modulus <br>
        <input type="submit" value="Calculate" name="submit">
        Result:<input type="text" name="result" value="<?php
        if(isset($result)) echo $result ?>">
        
    </form>
   
    
</body>
</html>
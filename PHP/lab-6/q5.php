<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        span{
            display: block;
            color: red;
            margin: 6px;
        }
    </style>
</head>
<body>
<?php

    $errName = $errAddress = $errPhone = $errPhoneLength='';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        
        if(empty($name)){
            $errName = "Name is blank<br>";
        }else
            if(is_numeric($name)){
                $errName = "Numeric value is not allowed<br>";
            }
            else{
            echo $name."<br>";
        }

        if(empty($address)){
            $errAddress = "Address cannot be empty.<br>";
        }else{
            echo $address."<br>";
        }

        if(empty($phone)){
            $errPhone = "Phone should not be blank<br>";
        }else{
            if(is_numeric($phone) && strlen($phone)==10){
            echo $phone;
        }
            else{
                $errPhoneLength = "Enter valid 10 numbers.<br>";
            }
        }
       
    }
    ?>
    <form action="" method="post">
        Name: <input type="text" name="name">
        <span class="error"><?php echo $errName ?></span>
    
        Address: <input type="text" name="address">
        <span class="error"><?php echo $errAddress ?></span>

        Phone: <input type="text" name="phone">
        <span class="error"><?php echo $errPhone?></span>
        
        <input type="submit" name="submit" value="submit">
    </form>

    
</body>
</html>
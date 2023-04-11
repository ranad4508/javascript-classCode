<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* css for span tag  */
        span{
            color: red;
            display: block;
            margin: 8px;
            font-size: 14px;
            font-style: italic;
        }
    </style>
</head>
<body>
<?php
//variable set
    $errName=$errAddress=$errPhone=$errPhoneLength=$errEmail=$errWeb=$errGender=$errFaculty=$errCountry=$errComment='';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $comment = $_POST['comment'];

        //name validation
        if(empty($name)){
            $errName = "Please enter your name";
        }
        else{
            echo $name."<br>";
        }

        //phone validation
        if(empty($phone)){
            $errPhone = "Please provide valid phone number";
        }
        else{
            if(is_numeric($phone) || strlen($phone)==10){
                echo $phone."<br>";
            }
            else{
                $errPhoneLength = "Enter valid 10 numbers for phone";
            }
        }

        //address validation
        if(empty($address)){
            $errAddress = "Please provide your address";
        }
        else{
            echo $address."<br>";
        }

        //email validation
        if(empty($_POST['email'])){
            $errEmail = 'Email is empty';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errEmail = "Email is not in proper format";
            }
            else{
                echo $email."<br>";
            }
        }

        //url validation
        if(empty($_POST['web'])){
            $errWeb = 'URL is empty';
        }else{
            $url = $_POST['web'];
            if(!filter_var($url, FILTER_VALIDATE_URL)){
                $errWeb = "URL is not in proper format";
            }
            else{
                echo $url."<br>";
            }
        }

        //gender(radio) validation
        if(empty($_POST['gender'])){
            $errGender = "Please select one gender";
        }
        else{
            echo $_POST['gender']."<br>";
        }

        //checkbox vaidation
        if(empty($_POST['faculty'])){
            $errFaculty = "Please select any one faculty";
        }
        else{
            $faculty = $_POST['faculty'];
            foreach($faculty as $value){
                echo $value." ";
            }
        }

        //select validation
        if($_POST['country']==0){
            $errCountry = "Please select any one country";
        }
        else{
            echo $_POST['country']."<br>";
        }

        //textarea validation
        if(empty($comment)){
            $errComment = "Please write some comment";
        }
        else{
            echo $comment;
        }
    }
    
    ?>
    <form action="" method="post">
        <!-- name -->
        Name: <input type="text" name="name"> 
        <span class="error"><?php
        echo $errName ?></span>
        <br>
        <!-- phone -->
        Phone: <input type="text" name="phone">
        <span class="error">
        <?php
        echo $errPhone
        ?>
        </span>
        <span><?php echo $errPhoneLength
         ?></span>
        <br>

        <!-- address -->
        Address: <input type="text" name="address">
        <span class="error">
        <?php
        echo $errAddress
        ?>
        </span><br>

        <!-- email -->
        Email:
        <input type="text" name="email">
        <span class="error"><?php
        
        echo $errEmail
        ?></span><br>

        <!-- url or web -->
        Web: <input type="text" name="web" >
        <span class="error"><?php
        
        echo $errWeb
        ?></span><br>

        <!-- radio -->
        Gender: <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <span class="error"><?php
        echo $errGender
        ?></span>

        <!-- checkbox -->
        Faculty:<br>
        <input type="checkbox" name="faculty[]" value="BIM">BIM <br>
        <input type="checkbox" name="faculty[]" value="BSW">BSW <br>
        <input type="checkbox" name="faculty[]" value="BBA">BBA <br>
        <input type="checkbox" name="faculty[]" value="CSIT">CSIT <br>
        <input type="checkbox" name="faculty[]" value="BBM">BBM <br>
        <input type="checkbox" name="faculty[]" value="BBS">BBS <br>
        <span class="error"><?php
        echo $errFaculty
        ?></span>

        <!-- selectbox -->
        Country: <select name="country" id="">
        <option value="0">Please select country</option>
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="China">China</option>
        </select>
        <span class="error"><?php echo $errCountry ?></span>

        <!-- textarea -->
        <textarea name="comment" id="" cols="30" rows="10">
            
        </textarea>
        <span><?php echo $errComment ?></span> <br>
        <input type="submit" value="Send" name="submit">
    </form>
    
</body>
</html>

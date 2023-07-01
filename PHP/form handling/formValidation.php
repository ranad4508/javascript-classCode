<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* css for span tag  */
        span {
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
    // Variables initialization
    $errName = $errAddress = $errPhone = $errPhoneLength = $errEmail = $errWeb = $errGender = $errFaculty = $errCountry = $errComment = '';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $comment = $_POST['comment'];

        // Name validation
        if (empty($name)) {
            $errName = "Please enter your name";
        } elseif (!preg_match("/^[A-Za-z]+$/", $name)) {
            $errName = "Name should only contain letters";
        } else {
            echo $name . "<br>";
        }

        // Phone validation
        if (empty($phone)) {
            $errPhone = "Please provide a valid phone number";
        } elseif (!preg_match("/^\d{10}$/", $phone)) {
            $errPhoneLength = "Please enter a valid 10-digit phone number";
        } else {
            echo $phone . "<br>";
        }

        // Address validation
        if (empty($address)) {
            $errAddress = "Please provide your address";
        } else {
            echo $address . "<br>";
        }

        // Email validation
        if (empty($_POST['email'])) {
            $errEmail = 'Email is empty';
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errEmail = "Email is not in proper format";
            } else {
                echo $email . "<br>";
            }
        }

        // URL validation
        if (empty($_POST['web'])) {
            $errWeb = 'URL is empty';
        } else {
            $url = $_POST['web'];
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                $errWeb = "URL is not in proper format";
            } else {
                echo $url . "<br>";
            }
        }

        // Gender (radio) validation
        if (empty($_POST['gender'])) {
            $errGender = "Please select one gender";
        } else {
            echo $_POST['gender'] . "<br>";
        }

        // Checkbox validation
        if (empty($_POST['faculty'])) {
            $errFaculty = "Please select any one faculty";
        } else {
            $faculty = $_POST['faculty'];
            foreach ($faculty as $value) {
                echo $value . " ";
            }
        }

        // Select validation
        if ($_POST['country'] == 0) {
            $errCountry = "Please select any one country";
        } else {
            echo $_POST['country'] . "<br>";
        }

        // Textarea validation
        if (empty($comment)) {
            $errComment = "Please write some comment";
        } else {
            echo $comment;
        }
    }

    ?>
    <form action="" method="post">
        <!-- Name -->
        Name: <input type="text" name="name">
        <span class="error"><?php echo $errName ?></span>
        <br>
        <!-- Phone -->
        Phone: <input type="text" name="phone">
        <span class="error"><?php echo $errPhone ?></span>
        <span><?php echo $errPhoneLength ?></span>
        <br>

        <!-- Address -->
        Address: <input type="text" name="address">
        <span class="error"><?php echo $errAddress ?></span><br>

        <!-- Email -->
        Email:
        <input type="text" name="email">
        <span class="error"><?php echo $errEmail ?></span><br>

        <!-- URL or Web -->
        Web: <input type="text" name="web">
        <span class="error"><?php echo $errWeb ?></span><br>

        <!-- Gender (Radio) -->
        Gender: <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <span class="error"><?php echo $errGender ?></span>

        <!-- Checkbox -->
        Faculty:<br>
        <input type="checkbox" name="faculty[]" value="BIM">BIM <br>
        <input type="checkbox" name="faculty[]" value="BSW">BSW <br>
        <input type="checkbox" name="faculty[]" value="BBA">BBA <br>
        <input type="checkbox" name="faculty[]" value="CSIT">CSIT <br>
        <input type="checkbox" name="faculty[]" value="BBM">BBM <br>
        <input type="checkbox" name="faculty[]" value="BBS">BBS <br>
        <span class="error"><?php echo $errFaculty ?></span>

        <!-- Selectbox -->
        Country: <select name="country" id="">
            <option value="0">Please select country</option>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="China">China</option>
        </select>
        <span class="error"><?php echo $errCountry ?></span>

        <!-- Textarea -->
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
        <span><?php echo $errComment ?></span> <br>
        <input type="submit" value="Send" name="submit">
    </form>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    // Function to validate input and display error messages
    function validateForm()
    {
        $nameErr = $addressErr = $phoneErr = $emailErr = $urlErr = "";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate Name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            }

            // Validate Address
            if (empty($_POST["address"])) {
                $addressErr = "Address is required";
            }

            // Validate Phone
            if (empty($_POST["phone"])) {
                $phoneErr = "Phone is required";
            } elseif (!preg_match("/^[0-9]{10}$/", $_POST["phone"])) {
                $phoneErr = "Invalid phone number";
            }

            // Validate Email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }

            // Validate URL
            if (empty($_POST["url"])) {
                $urlErr = "URL is required";
            } elseif (!filter_var($_POST["url"], FILTER_VALIDATE_URL)) {
                $urlErr = "Invalid URL";
            }
        }

        // Display the form
        echo '
        <form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
            Name:
            <input type="text" name="name" id="name" value="'.(isset($_POST["name"]) ? $_POST["name"] : '').'">
            <span class="error">'.$nameErr.'</span><br>
            
            Address:
            <input type="text" name="address" id="address" value="'.(isset($_POST["address"]) ? $_POST["address"] : '').'">
            <span class="error">'.$addressErr.'</span><br>
            
            Phone:
            <input type="text" name="phone" id="phone" value="'.(isset($_POST["phone"]) ? $_POST["phone"] : '').'">
            <span class="error">'.$phoneErr.'</span><br>
            
            Email:
            <input type="text" name="email" id="email" value="'.(isset($_POST["email"]) ? $_POST["email"] : '').'">
            <span class="error">'.$emailErr.'</span><br>
            
            URL:
            <input type="text" name="url" id="url" value="'.(isset($_POST["url"]) ? $_POST["url"] : '').'">
            <span class="error">'.$urlErr.'</span><br>
            
            <input type="submit" value="Submit">
        </form>';

        // Process the form if there are no errors
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($addressErr) && empty($phoneErr) && empty($emailErr) && empty($urlErr)) {
            processForm();
        }
    }

    // Function to process the form data
    function processForm()
    {
        // Retrieve the form data
        $name = $_POST["name"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $url = $_POST["url"];

        // Perform any necessary processing on the form data
        // For example, store the data in a database, send emails, etc.

        // Display a success message
        echo '<p>Form submitted successfully!</p>';
        echo '<p>Name: '.$name.'</p>';
        echo '<p>Address: '.$address.'</p>';
        echo '<p>Phone: '.$phone.'</p>';
        echo '<p>Email: '.$email.'</p>';
        echo '<p>URL: '.$url.'</p>';
    }

    // Call the function to validate and display the form
    validateForm();
    ?>
</body>
</html>

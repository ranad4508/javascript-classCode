<?php

session_start();

// Check if user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to index page
    exit();
}

// Check if login form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform login verification (example: hardcoded username and password)
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect to index page
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

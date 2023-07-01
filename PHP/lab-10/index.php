<?php

session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page
    exit();
}

// Logout functionality
if (isset($_POST['logout'])) {
    session_unset(); // Clear all session variables
    session_destroy(); // Destroy the session
    header("Location: login.php"); // Redirect to login page
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is the index page.</p>
    <form method="POST" action="index.php">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>

<?php
// Start session to access session variables
session_start();

// Check if the user is logged in through session or cookie
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // If not logged in through session, check if there's a valid cookie
    if (isset($_COOKIE['username'])) {
        // Set session variable from cookie value
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_COOKIE['username'];
    } else {
        // Redirect to login page if the user is not logged in (session and cookie are not valid)
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>

    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>You are now logged in.</p>

    <a href="logout.php">Logout</a>

</body>
</html>

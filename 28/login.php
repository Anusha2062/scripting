<?php
// Start the session to store login state
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Session and Cookie</title>
</head>
<body>

    <!-- Login form -->
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="remember_me">Remember me:</label>
        <input type="checkbox" name="remember_me" id="remember_me"><br><br>

        <input type="submit" value="Login" name="submit">
    </form>

    <?php
    // Backend login validation
    if (isset($_POST['submit'])) {
        // Sample valid username and password (could be from database in a real scenario)
        $valid_username = "admin";
        $valid_password = "password123";

        // Capture input
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate username and password
        if ($username === $valid_username && $password === $valid_password) {
            // Set session variable to indicate the user is logged in
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;

            // Set cookie if 'Remember me' is checked
            if (isset($_POST['remember_me']) && $_POST['remember_me'] == 'on') {
                // Set a cookie for 30 days
                setcookie("username", $username, time() + (30 * 24 * 60 * 60)); // 30 days
            }

            echo "<h3>Login successful! Welcome, $username.</h3>";
            echo "<a href='welcome.php'>Go to dashboard</a>";
        } else {
            // Invalid login attempt
            echo "<p style='color: red;'>Invalid username or password. Please try again.</p>";
        }
    }
    ?>

</body>
</html>

<?php
// Initialize error messages
$username_error = $email_error = $dob_error = $phone_error = "";
$registration_success = false;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $dob = trim($_POST['dob']);
    $phone = trim($_POST['phone']);

    // Validate username: must be at least 8 characters long
    if (strlen($username) < 8) {
        $username_error = "Username must be at least 8 characters long.";
    }

    // Validate email address: must be a valid email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please enter a valid email address.";
    }

    // Validate date of birth: must be in YYYY-MM-DD format
    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob)) {
        $dob_error = "Date of birth must be in YYYY-MM-DD format.";
    }

    // Validate phone number: must be 10 digits
    if (!preg_match("/^\d{10}$/", $phone)) {
        $phone_error = "Phone number must be exactly 10 digits long.";
    }

    // If no errors, proceed with registration
    if (empty($username_error) && empty($email_error) && empty($dob_error) && empty($phone_error)) {
        // Simulate storing data in a database (for simplicity)
        // In a real-world scenario, you would insert this data into a database like MySQL
        $registration_success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<?php
// Show success message if registration is successful
if ($registration_success) {
    echo "<p style='color: green;'>Registration successful!</p>";
}
?>

<!-- User Registration Form -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <label for="username">Username (at least 8 characters):</label>
    <input type="text" name="username" id="username" value="<?php echo isset($username) ? $username : ''; ?>" required>
    <span style="color: red;"><?php echo $username_error; ?></span><br><br>

    <label for="email">Email Address:</label>
    <input type="email" name="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
    <span style="color: red;"><?php echo $email_error; ?></span><br><br>

    <label for="dob">Date of Birth (YYYY-MM-DD):</label>
    <input type="text" name="dob" id="dob" value="<?php echo isset($dob) ? $dob : ''; ?>" required>
    <span style="color: red;"><?php echo $dob_error; ?></span><br><br>

    <label for="phone">Phone Number (10 digits):</label>
    <input type="text" name="phone" id="phone" value="<?php echo isset($phone) ? $phone : ''; ?>" required>
    <span style="color: red;"><?php echo $phone_error; ?></span><br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>

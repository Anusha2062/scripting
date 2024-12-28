<?php
// Define variables for error messages
$error_message = "";
$upload_success = false;

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Define the allowed file types and max size
    $allowed_file_types = ['image/png', 'image/jpeg'];
    $max_file_size = 512000; // 500 KB in bytes

    // Get the file info from the form input
    $file_name = $_FILES['profile_image']['name'];
    $file_tmp_name = $_FILES['profile_image']['tmp_name'];
    $file_size = $_FILES['profile_image']['size'];
    $file_type = $_FILES['profile_image']['type'];

    // Check if the file is uploaded
    if (empty($file_name)) {
        $error_message = "Please select a profile image to upload.";
    } elseif (!in_array($file_type, $allowed_file_types)) {
        $error_message = "Invalid file type. Only PNG and JPEG images are allowed.";
    } elseif ($file_size > $max_file_size) {
        $error_message = "File size is too large. The file must be less than 500KB.";
    } else {
        // Define the upload directory and file path
        $upload_dir = 'uploads/profile_images/';
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true); // Create the directory if it doesn't exist
        }
        $file_path = $upload_dir . basename($file_name);

        // Attempt to move the uploaded file to the specified directory
        if (move_uploaded_file($file_tmp_name, $file_path)) {
            $upload_success = true;
        } else {
            $error_message = "There was an error uploading your profile image.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Image</title>
</head>
<body>

<h2>Upload Your Profile Image</h2>

<!-- Form to upload profile image -->
<form method="POST" enctype="multipart/form-data">
    <label for="profile_image">Choose an image (PNG/JPEG):</label>
    <input type="file" name="profile_image" id="profile_image" accept=".png,.jpg,.jpeg" required><br><br>
    <input type="submit" name="submit" value="Upload">
</form>

<?php
// Display error message if there is any
if ($error_message) {
    echo "<p style='color: red;'>$error_message</p>";
}

// Display success message if the file is uploaded successfully
if ($upload_success) {
    echo "<p style='color: green;'>Your profile image has been uploaded successfully!</p>";
}
?>

</body>
</html>

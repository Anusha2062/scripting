<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_pkmc_2079_sl";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];
    $image = $_FILES['image']['name'];
    $created_by = $_POST['created_by'];

    // Image Upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Insert into database
    $sql = "INSERT INTO employees (name, rank, status, image, created_by) VALUES ('$name', '$rank', '$status', '$image', '$created_by')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully. <a href='index.php'>Go back</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create New Record</title>
</head>
<body>

<h2>Create New Record</h2>
<form method="POST" enctype="multipart/form-data">
    Name: <input type="text" name="name" required><br>
    Rank: <input type="text" name="rank" required><br>
    Status: <input type="text" name="status" required><br>
    Image: <input type="file" name="image" required><br>
    Created By: <input type="text" name="created_by" required><br>
    <input type="submit" value="Create Record">
</form>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pkmc_2079_sl";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $sql = "DELETE FROM employees WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully. <a href='index.php'>Go back</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Record</title>
</head>
<body>

<h2>Delete Record</h2>
<form method="POST">
    ID: <input type="text" name="id" required><br>
    <input type="submit" value="Delete Record">
</form>

</body>
</html>

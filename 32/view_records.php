<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pkmc_2079_sl";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Records</title>
</head>
<body>

<h2>List of Records</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Rank</th>
        <th>Status</th>
        <th>Image</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>

    <?php
    // Display records from the database
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['rank']}</td>
                    <td>{$row['status']}</td>
                    <td><img src='uploads/{$row['image']}' width='100' height='100'></td>
                    <td>{$row['created_by']}</td>
                    <td>{$row['updated_by']}</td>
                    <td>{$row['created_at']}</td>
                    <td>{$row['updated_at']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='9'>No records found</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conn->close();
?>

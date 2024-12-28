<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .pass {
            background-color: #90EE90; /* Light green */
        }
        .fail {
            background-color: #FFB6C1; /* Light red */
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Student Marksheet Generator</h2>
    <form method="POST" style="width: 50%; margin: 0 auto;">
        <label for="name">Student Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="roll">Roll Number:</label>
        <input type="number" name="roll" required><br><br>

        <label for="web_tech">Web Tech II:</label>
        <input type="number" name="web_tech" min="0" max="100" required><br><br>

        <label for="dbms">DBMS:</label>
        <input type="number" name="dbms" min="0" max="100" required><br><br>

        <label for="economics">Economics:</label>
        <input type="number" name="economics" min="0" max="100" required><br><br>

        <label for="dsa">DSA:</label>
        <input type="number" name="dsa" min="0" max="100" required><br><br>

        <label for="account">Account:</label>
        <input type="number" name="account" min="0" max="100" required><br><br>

        <input type="submit" value="Generate Marksheet">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $web_tech = $_POST['web_tech'];
        $dbms = $_POST['dbms'];
        $economics = $_POST['economics'];
        $dsa = $_POST['dsa'];
        $account = $_POST['account'];

        // Calculate total and result
        $total = $web_tech + $dbms + $economics + $dsa + $account;
        $result = ($web_tech >= 40 && $dbms >= 40 && $economics >= 40 && $dsa >= 40 && $account >= 40) ? 'Pass' : 'Fail';

        echo "<h3 style='text-align: center;'>Generated Marksheet</h3>";
        echo "<table>";
        echo "<tr><th>Name</th><td>$name</td></tr>";
        echo "<tr><th>Roll Number</th><td>$roll</td></tr>";
        echo "<tr><th>Subject</th><th>Marks</th></tr>";
        echo "<tr><td>Web Tech II</td><td>$web_tech</td></tr>";
        echo "<tr><td>DBMS</td><td>$dbms</td></tr>";
        echo "<tr><td>Economics</td><td>$economics</td></tr>";
        echo "<tr><td>DSA</td><td>$dsa</td></tr>";
        echo "<tr><td>Account</td><td>$account</td></tr>";
        echo "<tr><th>Total</th><td>$total</td></tr>";
        echo "<tr><th>Result</th><td class='" . ($result == 'Pass' ? "pass" : "fail") . "'>$result</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>

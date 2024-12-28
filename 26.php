<?php
// Student data stored in a multidimensional array
$students = [
    ["name" => "Rajesh", "roll" => 25, "web_tech" => 56, "dbms" => 89, "economics" => 57, "dsa" => 64, "account" => 98],
    ["name" => "Hari", "roll" => 5, "web_tech" => 56, "dbms" => 89, "economics" => 57, "dsa" => 64, "account" => 98],
    ["name" => "Shyam", "roll" => 6, "web_tech" => 54, "dbms" => 79, "economics" => 57, "dsa" => 69, "account" => 98],
    ["name" => "Rita", "roll" => 10, "web_tech" => 16, "dbms" => 56, "economics" => 56, "dsa" => 64, "account" => 98],
    ["name" => "Gita", "roll" => 4, "web_tech" => 56, "dbms" => 89, "economics" => 57, "dsa" => 69, "account" => 98],
    ["name" => "Sita", "roll" => 24, "web_tech" => 56, "dbms" => 99, "economics" => 57, "dsa" => 24, "account" => 98],
    ["name" => "Sita", "roll" => 24, "web_tech" => 56, "dbms" => 99, "economics" => 57, "dsa" => 24, "account" => 98],
];

// Calculate total marks, result, and display in a table
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .pass {
            background-color: #90EE90; /* Light green */
        }
        .fail {
            background-color: #FF7F7F; /* Light red */
        }
    </style>
</head>
<body>
    <h2>Student Marksheet</h2>
    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Web Tech II</th>
            <th>DBMS</th>
            <th>Economics</th>
            <th>DSA</th>
            <th>Account</th>
            <th>Total</th>
            <th>Result</th>
        </tr>
        <?php
        $sn = 1;
        foreach ($students as $student) {
            $total = $student["web_tech"] + $student["dbms"] + $student["economics"] + $student["dsa"] + $student["account"];
            $result = ($total >= 300) ? "pass" : "fail";
            echo "<tr>";
            echo "<td>" . $sn++ . "</td>";
            echo "<td>" . $student["name"] . "</td>";
            echo "<td>" . $student["roll"] . "</td>";
            echo "<td>" . $student["web_tech"] . "</td>";
            echo "<td>" . $student["dbms"] . "</td>";
            echo "<td>" . $student["economics"] . "</td>";
            echo "<td>" . $student["dsa"] . "</td>";
            echo "<td>" . $student["account"] . "</td>";
            echo "<td>" . $total . "</td>";
            echo "<td class='" . $result . "'>" . $result . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

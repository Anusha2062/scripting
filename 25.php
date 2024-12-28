<?php
// Given associative array
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];

// Start the HTML table
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Field</th><th>Details</th></tr>";

// Loop through the array and display each key-value pair in a table row
foreach ($info as $key => $value) {
    echo "<tr><td>" . ucfirst($key) . "</td><td>" . $value . "</td></tr>";
}

// End the table
echo "</table>";
?>

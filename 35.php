<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h2>Simple Interest Calculator</h2>
    <form method="POST">
        <label for="principal">Principal Amount:</label>
        <input type="number" name="principal" required><br><br>

        <label for="rate">Rate of Interest (% per year):</label>
        <input type="number" name="rate" step="0.01" required><br><br>

        <label for="time">Time (in years):</label>
        <input type="number" name="time" step="0.01" required><br><br>

        <input type="submit" value="Calculate Interest">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get form inputs
        $principal = $_POST['principal'];
        $rate = $_POST['rate'];
        $time = $_POST['time'];

        // Calculate simple interest
        $simple_interest = ($principal * $rate * $time) / 100;

        // Display the result
        echo "<h3>Simple Interest: " . number_format($simple_interest, 2) . "</h3>";
        echo "<h3>Total Amount (Principal + Interest): " . number_format($principal + $simple_interest, 2) . "</h3>";
    }
    ?>
</body>
</html>

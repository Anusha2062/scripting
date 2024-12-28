<!DOCTYPE html>
<html>
<head>
    <title>Tax Calculator</title>
</head>
<body>
    <h2>Tax Calculator</h2>
    <form method="POST">
        <label for="marital_status">Marital Status:</label>
        <select name="marital_status" required>
            <option value="married">Married</option>
            <option value="unmarried">Unmarried</option>
        </select><br><br>

        <label for="annual_income">Annual Income:</label>
        <input type="number" name="annual_income" required><br><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <input type="submit" value="Calculate Tax">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $marital_status = $_POST['marital_status'];
        $annual_income = $_POST['annual_income'];
        $gender = $_POST['gender'];

        $tax = 0;

        if ($marital_status == 'married') {
            if ($annual_income <= 450000) {
                $tax = $annual_income * 0.01;
            } elseif ($annual_income <= 550000) {
                $tax = 450000 * 0.01 + ($annual_income - 450000) * 0.10;
            } elseif ($annual_income <= 750000) {
                $tax = 450000 * 0.01 + 100000 * 0.10 + ($annual_income - 550000) * 0.20;
            } elseif ($annual_income <= 1300000) {
                $tax = 450000 * 0.01 + 100000 * 0.10 + 200000 * 0.20 + ($annual_income - 750000) * 0.30;
            } else {
                $tax = 450000 * 0.01 + 100000 * 0.10 + 200000 * 0.20 + 550000 * 0.30 + ($annual_income - 1300000) * 0.35;
            }
        } elseif ($marital_status == 'unmarried') {
            if ($annual_income <= 400000) {
                $tax = $annual_income * 0.01;
            } elseif ($annual_income <= 500000) {
                $tax = 400000 * 0.01 + ($annual_income - 400000) * 0.10;
            } elseif ($annual_income <= 750000) {
                $tax = 400000 * 0.01 + 100000 * 0.10 + ($annual_income - 500000) * 0.20;
            } elseif ($annual_income <= 1300000) {
                $tax = 400000 * 0.01 + 100000 * 0.10 + 250000 * 0.20 + ($annual_income - 750000) * 0.30;
            } else {
                $tax = 400000 * 0.01 + 100000 * 0.10 + 250000 * 0.20 + 550000 * 0.30 + ($annual_income - 1300000) * 0.35;
            }
        }

        // Apply gender discount
        if ($gender == 'female') {
            $tax *= 0.90; // 10% discount
        }

        echo "<h3>Calculated Tax: " . number_format($tax, 2) . "</h3>";
    }
    ?>
</body>
</html>

// 8. PHP program to calculate total number of legs of animals using form input
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['animals'])) {
    $chickens = $_POST['chickens'] ?? 0;
    $cows = $_POST['cows'] ?? 0;
    $pigs = $_POST['pigs'] ?? 0;

    $totalLegs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);
    echo "Total number of legs: $totalLegs";
}

?>

<!-- HTML Form for problem 8 -->
<form method="POST">
    <h2>Farm Animal Legs Calculator</h2>
    <label>Number of Chickens: <input type="number" name="chickens" required></label><br>
    <label>Number of Cows: <input type="number" name="cows" required></label><br>
    <label>Number of Pigs: <input type="number" name="pigs" required></label><br>
    <button type="submit" name="animals">Calculate Legs</button>
</form>

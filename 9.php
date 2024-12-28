<?php
// 9. PHP program to calculate total football team points using form input
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['football'])) {
    $wins = $_POST['wins'] ?? 0;
    $draws = $_POST['draws'] ?? 0;
    $losses = $_POST['losses'] ?? 0;

    $totalPoints = ($wins * 3) + ($draws * 1) + ($losses * 0);
    echo "Total points: $totalPoints";
}
?>

<!-- HTML Form for problem 9 -->
<form method="POST">
    <h2>Football Team Points Calculator</h2>
    <label>Number of Wins: <input type="number" name="wins" required></label><br>
    <label>Number of Draws: <input type="number" name="draws" required></label><br>
    <label>Number of Losses: <input type="number" name="losses" required></label><br>
    <button type="submit" name="football">Calculate Points</button>
</form>

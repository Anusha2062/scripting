<?php
// 17. Function to compute the sum of two integers with a condition
function computeSum($a, $b) {
    if ($a === $b) {
        return 3 * ($a + $b); // If both values are the same, return triple their sum
    } else {
        return $a + $b; // Otherwise, return the normal sum
    }
}

// Example usage
$val1 = 5;
$val2 = 5;
echo "The result for ($val1, $val2) is: " . computeSum($val1, $val2) . "<br>";

$val1 = 3;
$val2 = 8;
echo "The result for ($val1, $val2) is: " . computeSum($val1, $val2) . "<br>";
?>

<?php
// 18. Function to compute the absolute difference with a condition
function computeAbsoluteDifference($n) {
    $difference = abs($n - 51); // Calculate absolute difference from 51
    
    // If n is greater than 51, return triple the difference
    if ($n > 51) {
        return 3 * $difference;
    }
    
    return $difference; // Otherwise, return the normal absolute difference
}

// Example usage
$n = 60;
echo "The result for n = $n is: " . computeAbsoluteDifference($n) . "<br>";

$n = 40;
echo "The result for n = $n is: " . computeAbsoluteDifference($n) . "<br>";

$n = 51;
echo "The result for n = $n is: " . computeAbsoluteDifference($n) . "<br>";
?>

<?php
// 11. Function to check if an integer is evenly divisible by 5
function isDivisibleByFive($num) {
    return $num % 5 === 0; // Returns true if divisible by 5, false otherwise
}

// Example usage
$number = 25; // Change this value to test other numbers
if (isDivisibleByFive($number)) {
    echo "$number is divisible by 5.";
} else {
    echo "$number is not divisible by 5.";
}
?>

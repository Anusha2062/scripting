<?php
// Function to find the largest number among three integers
function findLargestNumber($num1, $num2, $num3) {
    // Check if the first number is larger than or equal to both the second and third
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    }
    // Check if the second number is larger than or equal to the first and third
    elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    }
    // If neither of the above, then the third number must be the largest
    else {
        return $num3;
    }
}

// Example usage
$number1 = 15;
$number2 = 20;
$number3 = 10;

echo "The largest number among $number1, $number2, and $number3 is: " . findLargestNumber($number1, $number2, $number3);
?>

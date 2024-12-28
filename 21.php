<?php
// Function to add the last character to the front and back of a string
function addLastCharToEnds($str) {
    // Check if the string length is at least 1
    if (strlen($str) >= 1) {
        $lastChar = substr($str, -1); // Get the last character of the string
        // Return the new string with the last character added to the front and back
        return $lastChar . $str . $lastChar;
    }
    return $str; // If string is empty (length < 1), return the original string
}

// Example usage
$string1 = "Red";
echo "Result: " . addLastCharToEnds($string1) . "<br>"; // Output: "dRedd"

$string2 = "Green";
echo "Result: " . addLastCharToEnds($string2) . "<br>"; // Output: "nGreenn"

$string3 = "1";
echo "Result: " . addLastCharToEnds($string3) . "<br>"; // Output: "111"
?>

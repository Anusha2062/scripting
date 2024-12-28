<?php
// Function to create 4 copies of the first 2 characters of a string
function createCopies($str) {
    // Check if the string length is less than 2
    if (strlen($str) < 2) {
        return $str; // Return the original string if length is less than 2
    }
    
    // Get the first 2 characters of the string
    $firstTwoChars = substr($str, 0, 2);
    
    // Return the 4 copies of the first 2 characters
    return str_repeat($firstTwoChars, 4);
}

// Example usage
$string1 = "C Sharp";
echo "Result: " . createCopies($string1) . "<br>"; // Output: "CC CC CC CC"

$string2 = "JS";
echo "Result: " . createCopies($string2) . "<br>"; // Output: "JSJSJSJS"

$string3 = "a";
echo "Result: " . createCopies($string3) . "<br>"; // Output: "a"
?>

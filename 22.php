<?php
// Function to create a new string with the first 3 characters added at both ends
function createStringWithFirstThreeChars($str) {
    // Get the first 3 characters or the entire string if it's less than 3 characters
    $firstThreeChars = strlen($str) < 3 ? $str : substr($str, 0, 3);
    
    // Return the new string with the first 3 characters added at both the front and back
    return $firstThreeChars . $str . $firstThreeChars;
}

// Example usage
$string1 = "Python";
echo "Result: " . createStringWithFirstThreeChars($string1) . "<br>"; // Output: "PytPythonPyt"

$string2 = "JS";
echo "Result: " . createStringWithFirstThreeChars($string2) . "<br>"; // Output: "JSJSJS"

$string3 = "Code";
echo "Result: " . createStringWithFirstThreeChars($string3) . "<br>"; // Output: "CodCodeCod"
?>

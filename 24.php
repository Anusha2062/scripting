<?php
// Function to convert the last 3 characters to uppercase
function convertLastThreeToUpper($str) {
    // Check if the string length is less than 3
    if (strlen($str) < 3) {
        return strtoupper($str); // Convert the entire string to uppercase
    }
    
    // Convert the last 3 characters to uppercase
    $lastThree = strtoupper(substr($str, -3));
    
    // Get the part of the string excluding the last 3 characters
    $restOfString = substr($str, 0, strlen($str) - 3);
    
    // Combine the unchanged part with the uppercase last 3 characters
    return $restOfString . $lastThree;
}

// Example usage
$string1 = "Nepal";
echo "Result: " . convertLastThreeToUpper($string1) . "<br>"; // Output: "NePAL"

$string2 = "Npl";
echo "Result: " . convertLastThreeToUpper($string2) . "<br>"; // Output: "NPL"

$string3 = "Bca";
echo "Result: " . convertLastThreeToUpper($string3) . "<br>"; // Output: "BCA"

$string4 = "Bachelor";
echo "Result: " . convertLastThreeToUpper($string4) . "<br>"; // Output: "BacheLOR"
?>

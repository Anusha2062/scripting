<?php
// Function to add 'if' to the front of a string
function addIfToFront($str) {
    // Check if the string already starts with 'if'
    if (substr($str, 0, 2) === 'if') {
        return $str; // If it starts with 'if', return the string unchanged
    }
    
    // Otherwise, add 'if' to the front of the string
    return 'if ' . $str;
}

// Example usage
$string1 = "if else";
echo "Result: " . addIfToFront($string1) . "<br>"; // Output: "if else"

$string2 = "else";
echo "Result: " . addIfToFront($string2) . "<br>"; // Output: "if else"

$string3 = "if";
echo "Result: " . addIfToFront($string3) . "<br>"; // Output: "if"
?>

<?php
// 12. Recursive function to calculate the length of a string
function stringLength($str) {
    // Base case: If the string is empty, its length is 0
    if ($str === "") {
        return 0;
    }
    // Recursive case: Remove the first character and add 1
    return 1 + stringLength(substr($str, 1));
}

// Example usage
$testString = "Hello, World!";
echo "The length of the string '$testString' is: " . stringLength($testString);
?>

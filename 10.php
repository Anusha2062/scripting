<?php
// Function to calculate the area of a triangle
function calculateTriangleArea($base, $height) {
    return 0.5 * $base * $height;
}

// Function to calculate age in days
function ageInDays($ageInYears) {
    return $ageInYears * 365;
}

// Function to calculate power
function calculatePower($voltage, $current) {
    return $voltage * $current;
}

// Function to compare lengths of two strings
function compareStringLengths($string1, $string2) {
    return strlen($string1) === strlen($string2);
}

// Example usage of functions
echo "<h3>Example Outputs</h3>";
echo "Triangle Area (base = 10, height = 5): " . calculateTriangleArea(10, 5) . "<br>";
echo "Age in Days (20 years): " . ageInDays(20) . "<br>";
echo "Power (Voltage = 220, Current = 5): " . calculatePower(220, 5) . "<br>";
echo "String Lengths Equal? ('Hello', 'World'): " . (compareStringLengths('Hello', 'World') ? "True" : "False") . "<br>";
?>

<?php
// Part 1: Creating variables with different datatypes and displaying them
// a. Print all data using echo and print
$intVar = 10; // Integer
$floatVar = 3.14; // Float
$stringVar = "Hello, PHP!"; // String
$boolVar = true; // Boolean
$arrayVar = array(1, 2, 3, "Four"); // Array

echo "Integer: $intVar\n";
print "Float: $floatVar\n";
echo "String: $stringVar\n";
print "Boolean: " . ($boolVar ? "true" : "false") . "\n";

// b. Display content of array using print_r and var_dump
echo "Array using print_r: ";
print_r($arrayVar);
echo "\nArray using var_dump: ";
var_dump($arrayVar);

// c. Display result of checking data types
echo "\nChecking data types:\n";
echo "Is \$intVar an integer? " . (is_int($intVar) ? "Yes" : "No") . "\n";
echo "Is \$floatVar a float? " . (is_float($floatVar) ? "Yes" : "No") . "\n";
echo "Is \$stringVar a string? " . (is_string($stringVar) ? "Yes" : "No") . "\n";
echo "Is \$boolVar a boolean? " . (is_bool($boolVar) ? "Yes" : "No") . "\n";
echo "Is \$arrayVar an array? " . (is_array($arrayVar) ? "Yes" : "No") . "\n";
?>
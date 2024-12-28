<?php
// 15. Function to return the value of an array at a given index
function getValueAtIndex($array, $index) {
    // Check if the index exists in the array
    if (array_key_exists($index, $array)) {
        return $array[$index];
    } else {
        return "Index not found in the array.";
    }
}

// Example usage
$array = ["apple", "banana", "cherry", "date"];
$index = 2;

echo "The value at index $index is: " . getValueAtIndex($array, $index) . "<br>";

$index = 5;
echo "The value at index $index is: " . getValueAtIndex($array, $index) . "<br>";
?>

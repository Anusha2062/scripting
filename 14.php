<?php
// 14. Function to find the index of a string in an array
function findStringIndex($array, $string) {
    // Use array_search to find the index of the string
    $index = array_search($string, $array);
    
    // Check if the string exists in the array
    if ($index === false) {
        return "String not found in the array.";
    }
    return $index;
}

// Example usage
$array = ["apple", "banana", "cherry", "date"];
$stringToFind = "cherry";

echo "The index of '$stringToFind' in the array is: " . findStringIndex($array, $stringToFind) . "<br>";

$stringToFind = "orange";
echo "The index of '$stringToFind' in the array is: " . findStringIndex($array, $stringToFind) . "<br>";
?>

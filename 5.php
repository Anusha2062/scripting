// Part 5: Function to calculate the area of a triangle
<?php
function calculateTriangleArea($base, $height) {
    return 0.5 * $base * $height;
}
$base = 10; // Example inputs
$height = 15;
echo "\nThe area of a triangle with base $base and height $height is: " . calculateTriangleArea($base, $height) . "\n";
?>
<?php
// 13. Function to calculate the area of a shape
function calculateArea($base, $height, $shape) {
    // Convert shape to lowercase for case-insensitivity
    $shape = strtolower($shape);

    // Check the shape type and calculate the area
    if ($shape === "triangle") {
        return 0.5 * $base * $height; // Area of a triangle
    } elseif ($shape === "parallelogram") {
        return $base * $height; // Area of a parallelogram
    } else {
        return "Invalid shape type. Please specify 'triangle' or 'parallelogram'.";
    }
}

// Example usage
$base = 10;
$height = 5;

echo "Area of Triangle (Base = $base, Height = $height): " . calculateArea($base, $height, "triangle") . "<br>";
echo "Area of Parallelogram (Base = $base, Height = $height): " . calculateArea($base, $height, "parallelogram") . "<br>";
echo "Invalid Shape: " . calculateArea($base, $height, "circle") . "<br>";
?>

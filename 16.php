<?php
// 16. Function to calculate the number of cars needed
function calculateCarsNeeded($numberOfPeople) {
    $seatingCapacityPerCar = 5; // Each car seats 5 people
    return ceil($numberOfPeople / $seatingCapacityPerCar);
}

// Example usage
$people = 17;

echo "For $people people, the number of cars needed is: " . calculateCarsNeeded($people) . "<br>";

$people = 5;
echo "For $people people, the number of cars needed is: " . calculateCarsNeeded($people) . "<br>";

$people = 0;
echo "For $people people, the number of cars needed is: " . calculateCarsNeeded($people) . "<br>";
?>

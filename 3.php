<?php
function convertMinutesToSeconds($minutes) {
    return $minutes * 60;
}
$minutes = 5; // Example input
echo "\n$minutes minutes in seconds: " . convertMinutesToSeconds($minutes) . " seconds\n";
?>
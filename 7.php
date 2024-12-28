<?php
// 7. Function to calculate power using voltage and current
function calculatePower($voltage, $current) {
    return $voltage * $current; // Power = Voltage * Current
}
// Example usage
$voltage = 220; // in volts
$current = 5;   // in amperes

echo "Power (Voltage = $voltage V, Current = $current A): " . calculatePower($voltage, $current) . " W";

?>



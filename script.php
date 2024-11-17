<?php
// Script: Unique Output Generator

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');

// Generate a random number
$randomNumber = rand(1000, 9999);

//Display the outputs
echo "Current Time: " . $currentDateTime . "\n";
echo "Random Number: " . $randomNumber . "\n";

if (file_put_contents($filePath, $randomNumber)) {
    echo "File created successfully: $filePath\n";
} else {
    echo "Failed to create file: $filePath\n";
}

?>

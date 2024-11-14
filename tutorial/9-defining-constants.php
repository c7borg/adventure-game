<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW


// Define constants
define("MAX_HEALTH", 100);
define("INVENTORY_LIMIT", 5);

$health = 85;
$inventory = ["torch", "rope", "map", "compass"];

// Apply maximum health limit
if ($health > MAX_HEALTH) {
    $health = MAX_HEALTH;
}
echo "<p>Your health is now at its maximum: " . $health . "</p>";

// Check if inventory has reached its limit
if (count($inventory) >= INVENTORY_LIMIT) {
    echo "<p>You can’t carry any more items. Inventory limit reached!</p>";
} else {
    echo "<p>You have space for more items in your inventory.</p>";
}

//DEMO ABOVE
include('includes/footer.php');
?>
<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW


// Define constants
define("MAX_HEALTH", 100);
define("INVENTORY_LIMIT", 5);


$health = 85;
$potion = 20;

// Apply the health potion
$health += $potion;

// Apply maximum health limit
if ($health > MAX_HEALTH) {
    $health = MAX_HEALTH;
}
echo "<p>Your health is now: " . $health . "</p>";

$inventory = ["torch", "rope", "map", "compass","banana"];

$lootItem = "spade";

// Check if inventory has reached its limit
if (count($inventory) >= INVENTORY_LIMIT) {
    echo "<p>You can’t carry any more items. Inventory limit reached!</p>";
} else {
    $inventory[] = $lootItem; // Add the new item to the inventory
    echo "<p>You picked up a $lootItem! Your inventory now contains: " . implode(", ", $inventory) . ".</p>";
}

//DEMO ABOVE
include('includes/footer.php');
?>
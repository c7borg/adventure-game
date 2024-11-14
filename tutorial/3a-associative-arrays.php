<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
// DEMO BELOW

$world = [ 1 => ["description" => "You see a forest."], 2 => ["description" => "You see a cabin."]];

echo "<p>{$world[1]['description']}</p>";
echo "<p>{$world[2]['description']}</p>";

$world = [ 'Forest' => ["description" => "You see a forest."], 'Cabin' => ["description" => "You see a cabin."]];

echo "<p>{$world['Forest']['description']}</p>";
echo "<p>{$world['Cabin']['description']}</p>";

$player = [];
// Player inventory using an associative array
$player['inventory'] = [
    "map" => 1,
    "flashlight" => 1,
];

//Referencing an item and its quatity
if(isset($player['inventory']['map'])){
    echo "<p>The player has a map and has a qty of {$player['inventory']['map']}</p>";
} else {
    echo "<p>The player does not have a map</p>";
}

// Add a new item
$player['inventory']["rope"] = 1; // Adds 'rope' with quantity 1

// Display updated inventory
echo "<p>Updated Inventory: </p>";
echo "<ul>";
foreach ($player['inventory'] as $item => $quantity) {
    echo "<li>$item (Quantity: $quantity)</li>";
}
echo "</ul>";

// Remove an item (e.g., 'map')
unset($player['inventory']["map"]); // Removes 'map' from the inventory

// Display inventory after removal
echo "<p>Inventory after removal: </p>";
echo "<ul>";
foreach ($player['inventory'] as $item => $quantity) {
    echo "<li>$item (Quantity: $quantity)</li>";
}
echo "</ul>";

// DEMO ABOVE
include('includes/footer.php');
?>
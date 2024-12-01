<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
// DEMO BELOW

// Player inventory using an associative array
$player['inventory'] = [
    "map" => 1,
    "rope" => 2,
    "keys" => 8,
    "shiny gem" => 4,
    "pet" => 'pig',
];

// Display unsorted inventory
echo "<p>Original Inventory: </p>";
echo "<pre>". print_r($player['inventory'],true). "</pre>"; 
// sorts by value alphabetically a-z 1-9 but loses the keys
// sort($player['inventory']); 
// If you needed to just sort the values but keep the keys you can copy the array then sort
echo "<p>Copy of Inventory \$sortedInventory: </p>";
$sortedInventory = $player['inventory'];
sort($sortedInventory);
echo "<pre>". print_r($sortedInventory,true). "</pre>"; 
 
// sorts alphabetically retaining the key
asort($player['inventory']); 

// reverse sorts by value alphabetically Z-9-1 z-a retaining the key
arsort($player['inventory']);

// sorts alphabetically by the key
ksort($player['inventory']); 


// Display inventory after sorting
echo "<p>Sorted Inventory: </p>";
// Below shows the raw array
echo "<pre>". print_r($player['inventory'],true). "</pre>";

// DEMO ABOVE
include('includes/footer.php');
?>
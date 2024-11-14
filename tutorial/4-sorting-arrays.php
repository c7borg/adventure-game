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
    "visitedAreas" => array(4,1,2,3),
];

// Display unsorted inventory
echo "<p>Unsorted Inventory: </p>";
echo "<ul>";
foreach ($player['inventory'] as $item => $quantity) {
    echo "<li>$item (Qty: $quantity)</li>";
}
echo "</ul>";

// sorts by value alphabetically a-z 1-9 but loses the keys
// sort($player['inventory']); 
// If you needed to just sort the values but keep the keys you can copy the array then sort
// $sortedInventory = $player['inventory'];
// sort($sortedInventory);
// echo "<pre>";
// print_r($sortedInventory);
// echo "</pre>";
 
// sorts alphabetically retaining the key
// asort($player['inventory']); 

// reverse sorts by value alphabetically 9-1 z-a retaining the key
arsort($player['inventory']);

// sorts alphabetically by the key
// ksort($player['inventory']); 


// Display inventory after removal
echo "<p>Sorted Inventory: </p>";
echo "<ul>";
foreach ($player['inventory'] as $item => $quantity) {
    echo "<li>$item (Qty: $quantity)</li>";
}
// Below shows the raw array
echo "</ul>";
echo "<pre>";
// var_dump($player['inventory']);
print_r($player['inventory']);
echo "</pre>";
// DEMO ABOVE
include('includes/footer.php');
?>
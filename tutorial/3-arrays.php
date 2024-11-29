<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
// DEMO BELOW

// Player inventory array 
$inventory = ["map", "flashlight"];// Introduced in PHP 5.4 (Current version is >8)

// Display inventory
echo "<p>Inventory:</p>";
echo "<ul>";
foreach ($inventory as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

// Adding a new item
$inventory[] = "rope"; // Add rope to inventory

// Show updated inventory
echo "<p>Updated Inventory:</p>";
echo "<ul>";
foreach ($inventory as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

echo "<p>First item in the inventory:{$inventory[0]}</p>";

// Remove an item (e.g., the first item)
unset($inventory[0]); // Removes 'map'

// Display inventory after removal
echo "Inventory after removal: \n";
foreach ($inventory as $item) {
    echo "- $item\n";
}

echo "<p>First item in the inventory is now index 1 as 0 has been removed:{$inventory[1]}</p>";

echo "<p>Before reindexing:</p>";
var_dump($inventory);
 
//We can reindex the array to avoid gaps
$inventory = array_values($inventory);
echo "<p>After reindexing:</p>";
var_dump($inventory);
echo "<p>First item in the inventory is now index 0 again:{$inventory[0]}</p>";

//Quick introduction to sorting
echo "<p>Sorting arrays</p>";

$backpack = ["water bottle","notebook","snack","pen","first aid kit"];
print_r($backpack);// print_r is like var_dump but does not show the variable type
echo "<p>Sorted array</p>";
sort($backpack);
print_r($backpack);


// DEMO ABOVE
include('includes/footer.php');
?>
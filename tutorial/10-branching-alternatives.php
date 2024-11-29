<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

echo "<h4>Basic if Statement</h4>";

$action = "give_item"; // This is the action the player chose
$current_area = "forest";
$inventory = [];

// Define possible actions in each area
$world = [
    "forest" => [
        "actions" => [
            "give_item" => "Shiny Gem",
        ]
    ],
    "desert" => [
        "actions" => [
            "give_item" => "Map",
        ]
    ]
];

if (isset($world[$current_area]["actions"][$action])) {
    $item = $world[$current_area]["actions"][$action];
    if (empty($inventory[$item])) {
        $inventory[$item] = true; // Add item to inventory
        $message = "<br>You added a $item to your inventory";
    }
    
    echo "<p>$message</p>";
}
var_dump($inventory);

echo "<h4>if-else Statement</h4>";

if (isset($world[$current_area]["actions"][$action])) {
    $item = $world[$current_area]["actions"][$action];
    if (empty($inventory[$item])) {
        $inventory[$item] = true; // Add item to inventory
        $message = "<br>You added a $item to your inventory";
    } else {
        $message = "<br>You already have a $item in your inventory";
    }
    
    echo "<p>$message</p>";
}
var_dump($inventory);

echo "<h4>if-elseif-else Statement</h4>";

// Define the maximum inventory limit as a constant
define('INVENTORY_LIMIT', 5);
// Fill the inventory with items
$inventory['key'] = true;
$inventory['rope'] = true;
$inventory['map'] = true;
$inventory['spade'] = true;

if (isset($world[$current_area]["actions"][$action])) {
    $item = $world[$current_area]["actions"][$action];
    
    if (empty($inventory[$item]) && count($inventory) < INVENTORY_LIMIT) {
        $inventory[$item] = true; // Add item to inventory
        $message = "<br>You added a $item to your inventory.";
    } elseif (count($inventory) >= INVENTORY_LIMIT) {
        $message = "<br>Your inventory is full! You cannot carry the $item.";
    } else {
        $message = "<br>You already have a $item in your inventory.";
    }
    
    echo "<p>$message</p>";
}
var_dump($inventory);

echo "<h4>Nested if Statements</h4>";

unset($inventory['Shiny Gem']); //Remove the Shiny Gem

if (isset($world[$current_area]["actions"][$action])) {
    $item = $world[$current_area]["actions"][$action];

    // Check if item is already in inventory
    if (!empty($inventory[$item])) {
        $message = "<br>You already have a $item in your inventory.";
    } else {
        // Nested condition: Check inventory space
        if (count($inventory) < INVENTORY_LIMIT) {
            // Another nested condition: Special items
            if ($item === "Shiny Gem") {
                $message = "<br>You discovered a rare $item! It's now in your inventory.";
            } else {
                $message = "<br>You added a $item to your inventory.";
            }
            $inventory[$item] = true; // Add item to inventory
        } else {
            // Inventory full
            $message = "<br>Your inventory is full! You cannot carry the $item.";
        }
    }

    echo "<p>$message</p>";
}
var_dump($inventory);



//DEMO ABOVE
include('includes/footer.php');
?>
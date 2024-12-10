<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
// DEMO BELOW
$inventory = [
    "map" => 1,
    "flashlight" => 1,
];

if (!empty($inventory['map'])) {
    echo "<p>The player has a map and has a qty of {$inventory['map']}</p>";
} else {
    echo "<p>The player does not have a map</p>";
}

$inventory["rope"] = 1; // Add rope with quantity 1
$inventory["rope"] += 5; // Add 5 more ropes
$inventory["rope"] -= 3; // Remove  more ropes

echo "<p>Updated Inventory: </p>";
print_r($inventory);

unset($inventory["map"]); // Remove map

echo "<p>Inventory after removal: </p>";
print_r($inventory);

$world = [
    1 => [
        "description" => "You are in a sunny clearing surrounded by tall grass. To the east, there's a dense forest.",
        "directions" => ["north" => 9, "south" => 2],
        "actions" => [],
        "image" => "images/1-clearing.jpg" // path to background image
    ],
    2 => [
        "description" => "You enter the forest. The light dims, and you feel the presence of something ancient. A path leads north to an abandoned cabin.",
        "directions" => ["north" => 1, "south" => 3, "west" => 4],
        "actions" => 
        ["search" => "You find a strange symbol carved on a tree."],
        "image" => "images/2-forest.jpg" // path to background image
    ],
];

echo "<p>{$world[1]['description']}</p>";
echo "<p>{$world[2]['description']}</p>";

$selectedWorld = 2;

    echo "<p><strong>Location {$selectedWorld}</strong>: {$world[$selectedWorld]['description']}</p>";
    echo "<p>Image:<br><img src='../game/{$world[$selectedWorld]['image']}' width='100px'></p>";
    
    if (!empty($world[$selectedWorld]['directions'])) {
        echo "<p>Directions:</p><ul>";
        foreach ($world[$selectedWorld]['directions'] as $direction => $nextLocation) {
            echo "<li>$direction leads to location $nextLocation</li>";
        }
        echo "</ul>";
    }

    if (!empty($world[$selectedWorld]['actions'])) {
        echo "<p>Actions:</p><ul>";
        foreach ($world[$selectedWorld]['actions'] as $action => $result) {
            echo "<li>$action: $result</li>";
        }
        echo "</ul>";
    }


// DEMO ABOVE
include('includes/footer.php');
?>

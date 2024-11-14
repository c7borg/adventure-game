<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

echo "<h4>Basic if Statement</h4>";

$action = "explore"; // This is the action the player chose
$current_area = "forest";

// Define possible actions in each area
$world = [
    "forest" => [
        "actions" => [
            "explore" => "You discover a hidden path.",
        ]
    ]
];

if (isset($world[$current_area]["actions"][$action])) {
    $message = $world[$current_area]["actions"][$action];
    echo "<p>$message</p>";
}


echo "<h4>if-else Statement</h4>";

if (isset($world[$current_area]["actions"][$action])) {
    $message = $world[$current_area]["actions"][$action];
} else {
    $message = "Nothing happens.";
}

echo "<p>$message</p>";

echo "<h4>if-elseif-else Statement</h4>";

$current_area = "forest";
$action = "explore";

if ($action === "explore" && $current_area === "forest") {
    $message = "You find a hidden path in the forest!";
} elseif ($action === "explore" && $current_area === "desert") {
    $message = "You see nothing but endless sand.";
} else {
    $message = "Nothing happens.";
}

echo "<p>$message</p>";

echo "<h4>Nested if Statements</h4>";

$current_area = "forest";
$action = "explore";
$found_item = true; 

if ($action === "explore" && $current_area === "forest") {
    $message = "You find a hidden path in the forest!";
    
    // Nested if to check if an item is found
    if ($found_item) {
        $item = "mysterious stone";
        $message .= " You have found a $item!";
    }
} else {
    $message = "Nothing happens.";
}

echo "<p>$message</p>";



//DEMO ABOVE
include('includes/footer.php');
?>
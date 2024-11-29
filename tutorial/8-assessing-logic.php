<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

$inventory = ["torch", "rope", "map"];
$health = 70;
$hasTorch = in_array("torch", $inventory);
$hasRope = in_array("rope", $inventory);

// Player can climb a cliff if they have a rope and health above 60
if ($hasRope && $health > 60) {
    echo "<p>You have the rope and enough strength to climb the cliff!</p>";
} else {
    echo "<p>You lack either the rope or the health to make the climb.</p>";
}

// Player needs either a torch or rope to safely explore a cave
if ($hasTorch || $hasRope) {
    echo "<p>You feel prepared to explore the cave with your equipment.</p>";
} else {
    echo "<p>It's too dangerous to enter the cave without a torch or rope.</p>";
}

// Player inventory using an associative array
$player['inventory'] = [
    "map" => 0,
    "flashlight" => 1,
];
$intelligence = 80;

// Demonstrating the difference between !empty and isset
$hasMap = !empty($player['inventory']['map']);
// $hasMap = isset($player['inventory']['map']);


var_dump($hasMap);

//Referencing an item and its quatity
if($hasMap && $intelligence > 70){
    echo "<p>The player has a map and has a qty of {$player['inventory']['map']}</p>";
} else {
    echo "<p>The player needs both intelligence and the map</p>";
}

//DEMO ABOVE
include('includes/footer.php');
?>
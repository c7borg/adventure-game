<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
// DEMO BELOW

$health = 65; // Current health
echo "<p>Current Health: {$health}</p>";


echo "<h4>Greater than or equal to</h4>";
// Event: Checking if player has enough health to cross a risky bridge
$bridgeHealthRequirement = 50;
if ($health >= $bridgeHealthRequirement) {
    echo "<p>You feel strong enough to cross the rickety bridge. (Health: {$health} >= Required: {$bridgeHealthRequirement})</p>";
} else {
    echo "<p>Your health is too low to risk crossing the bridge. (Health: {$health} < Required: {$bridgeHealthRequirement})</p>";
}


echo "<h4>Less than or equal to</h4>";
// Event: Check if player needs a healing potion based on health level
$lowHealthThreshold = 30;
if ($health <= $lowHealthThreshold) {
    echo "<p>Your health is dangerously low. You should use a healing potion soon! (Health: {$health} <= Threshold: {$lowHealthThreshold})</p>";
} else {
    echo "<p>Your health is stable for now. No need to use a potion. (Health: {$health} > Threshold: {$lowHealthThreshold})</p>";
}


echo "<h4>Equal to</h4>";
// Event: Checking if the player’s health is at full capacity
$maxHealth = 100;
if ($health == $maxHealth) {
    echo "<p>Your health is at its maximum! You're fully prepared for any challenge ahead. (Health: {$health} == Max: {$maxHealth})</p>";
} else {
    echo "<p>Your health is not at maximum. Keep an eye out for health items to stay in top shape. (Health: {$health} != Max: {$maxHealth})</p>";
}

echo "<h4>Not equal to</h4>";
// Event: Player encounters a merchant that only sells to players not at full health
if ($health != $maxHealth) {
    echo "<p>A merchant offers to sell you a potion since your health isn’t full. (Health: {$health} != Max: {$maxHealth})</p>";
} else {
    echo "<p>The merchant says, 'You’re already at full health; save your money!' (Health: {$health} == Max: {$maxHealth})</p>";
}


echo "<h4>Greater than</h4>";
// Event: Player encounters an enemy with a health comparison
$enemyHealth = 70;
if ($health > $enemyHealth) {
    echo "<p>You feel stronger than the enemy. Prepare to fight! (Health: {$health} > Enemy Health: {$enemyHealth})</p>";
} else {
    echo "<p>The enemy looks stronger than you. It might be wise to avoid combat. (Health: {$health} <= Enemy Health: {$enemyHealth})</p>";
}


echo "<h4>Greater than - using ternary operators saving as a variable</h4>";
// Event: Check if health is above a mid-level mark using ternary operator
$midLevelThreshold = 50;
$message = ($health > $midLevelThreshold) 
    ? "You have enough health to continue exploring without worry. (Health: {$health} > Mid-Level: {$midLevelThreshold})" 
    : "Your health is getting low; consider finding a safe spot. (Health: {$health} <= Mid-Level: {$midLevelThreshold})";
echo "<p>{$message}</p>";


echo "<h4>Less than - using ternary operators echoing directly</h4>";
// Final check before a dangerous encounter
$dangerZoneThreshold = 25;
echo $health < $dangerZoneThreshold
    ? "<p>Your health is critically low! Avoid any risky encounters. (Health: {$health} < Danger Zone: {$dangerZoneThreshold})</p>"
    : "<p>Your health is sufficient for the next challenge. (Health: {$health} >= Danger Zone: {$dangerZoneThreshold})</p>";

// DEMO ABOVE
include('includes/footer.php');
?>
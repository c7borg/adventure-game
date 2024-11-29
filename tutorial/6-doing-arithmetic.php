<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
// DEMO BELOW

$health = 99; // Starting health
echo "<p>Starting Health: $health</p>";

echo "<h4>Addition and Subtraction</h4>";
// Event: Player encounters a trap
$trapDamage = 20;
$health -= $trapDamage; // Subtract trap damage from health
// $health = $health - $trapDamage; // Written in longhand
echo "<p>Ouch! You triggered a trap and lost $trapDamage health points.</p>";
echo "<p>Health after trap: $health</p>";

// Event: Player finds a health potion
$potion = 15;
$health += $potion; // Add potion value to health
// $health = $health + $potion; // Written in longhand
echo "<p>You found a health potion! Restored $potion health points. Health: $health</p>";
echo "<p>Health after healing: $health</p>";

echo "<h4>Multiplication and Division</h4>";
// Event: Player equips a power-up that doubles health for a limited time
$health *= 2; // Multiply health by 2 this is the same as 
// $health = $health * 2; // Written in longhand
echo "<p>You found a power-up! Your health is doubled. Health: $health</p>";

// Event: Player finds a cursed object that halves health
$health /= 2; // Divide health by 2
// $health = $health / 2; // Written in longhand
echo "<p>You touched a cursed object! Your health is halved. Health: $health</p>";

echo "<h4>Modulo</h4>";
// Event: Player gains a shield that grants health based on odd or even
$shield = 25; 

if ($health % 2 == 0) {
    $health += $shield;
    echo "<p>Your health is even. Shield bonus applied! Health: $health</p>";
} else {
    echo "<p>Your health is odd. No shield bonus applied. Health remains: $health</p>";
}

echo "<h4>Radom</h4>";

$randomChance = rand(1, 10); // Random number between 1 and 10

if ($randomChance <= 3) {
    echo "<p>Lucky you! A wandering merchant gives you a treasure chest!</p>";
} else {
    echo "<p>Nothing happens. Better luck next time!</p>";
}

echo "<h4>Incrementing and Decrementing</h4>";
// Regenerating health these could be in a loop or after each turn
$health++;
echo "<p>You rest and regenerate +1 health: $health</p>";
// Decreasing health this could be in a loop
$health--;
echo "<p>The poisonous cloud reduces your health by -1: $health</p>";

$maxHealth = 100;
// Ensure health doesn't exceed max after final calculations
if ($health > $maxHealth) {
    $health = $maxHealth;
}
echo "<p>Final Health: $health</p>";




// DEMO ABOVE
include('includes/footer.php');
?>
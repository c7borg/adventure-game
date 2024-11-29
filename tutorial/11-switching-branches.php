<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

echo "<h4>String Switching</h4>";

$action = "attack"; // Player’s chosen action

switch ($action) {
    case "attack":
        echo "<p>You draw your sword and engage the enemy!</p>";
        break;
    case "defend":
        echo "<p>You raise your shield, bracing for impact.</p>";
        break;
    case "flee":
        echo "<p>You turn and run for safety, hoping to escape.</p>";
        break;
    default:
        echo "<p>You hesitate, unsure of what to do.</p>";
}


echo "<h4>Numbered Switching</h4>";

$item = 2; // Player’s chosen item (1: Potion, 2: Sword, 3: Map)

switch ($item) {
    case 1:
        echo "<p>You purchase a health potion. Restores 50 HP.</p>";
        break;
    case 2:
        echo "<p>You buy a shiny new sword. Attack power increased by 10.</p>";
        break;
    case 3:
        echo "<p>You acquire an ancient map. A hidden treasure awaits!</p>";
        break;
    default:
        echo "<p>The merchant frowns. 'I don't sell that, traveller.'</p>";
}


echo "<h4>Complex Switching</h4>";

// Generate a random number between 1 and 100
$outcome = rand(1, 100);
$playerLevel = 5; // Example player level for conditional logic

echo "You rolled a $outcome.\n";

switch (true) {
    case ($outcome <= 30 && $playerLevel < 10): 
        // 30% chance, only for low-level players
        echo "<p>You find a small health potion and recover 10 health points.</p>";
        break;
    case ($outcome <= 30): 
        // 30% chance, fallback for higher levels
        echo "<p>You find a basic healing herb and gain 5 additional points.</p>";
        break;
    case ($outcome > 30 && $outcome <= 60 && $outcome % 2 == 0): 
        // 30% chance, even numbers only
        echo "<p>A mysterious artefact glows! Your intelligence increases by 3.</p>";
        break;
    case ($outcome > 60 && $outcome <= 80 && $playerLevel >= 5): 
        // 20% chance for experienced players
        echo "<p>You find an enchanted shield! Defence skill improves by 5.</p>";
        break;
    case ($outcome > 80): 
        // 20% chance for rare boosts
        echo "<p>A legendary weapon is bestowed upon you! Strength increases by 10.</p>";
        break;
    default:
        echo "<p>You peer in and see nothing but dust.</p>";
}
//DEMO ABOVE
include('includes/footer.php');
?>
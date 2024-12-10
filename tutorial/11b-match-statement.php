<?php
$pageTitle = basename(__FILE__, '.php');
include('includes/header.php');
//DEMO BELOW

echo "<h4>String Matching</h4>";

$actions = ['attack', 'defend', 'flee', 'look confused'];
$action = $actions[array_rand($actions)];// Player’s chosen action

echo match ($action) {
    "attack" => "<p>You draw your sword and engage the enemy!</p>",
    "defend" => "<p>You raise your shield, bracing for impact.</p>",
    "flee" => "<p>You turn and run for safety, hoping to escape.</p>",
    default => "<p>You hesitate, unsure of what to do.</p>",
};

$item = rand(1, 4); // Player’s chosen item (1: Potion, 2: Sword, 3: Map)

echo "<h4>Number Matching</h4>";

echo match ($item) {
    1 => "<p>You purchase a health potion. Restores 50 HP.</p>",
    2 => "<p>You buy a shiny new sword. Attack power increased by 10.</p>",
    3 => "<p>You acquire an ancient map. A hidden treasure awaits!</p>",
    default => "<p>The merchant frowns. 'I don't sell that, traveller.'</p>",
};


echo "<h4>Complex Matching</h4>";

// Generate a random number between 1 and 100
$outcome = rand(1, 100);
$playerLevel = 5; // Example player level for conditional logic
$strength = 5;
$health = 50;

echo "<p>You rolled a $outcome.</p>";

$result = match (true) {
    $outcome <= 30 && $playerLevel < 10 => "<p>You find a small health potion and recover 10 health points health is now ". ($health += 10)."</p>",
    $outcome <= 30 => "<p>You find a basic healing herb and gain 5 additional points. health is now ". ($health += 5)."</p>>",
    $outcome > 30 && $outcome <= 60 && $outcome % 2 == 0 => "<p>A mysterious artefact glows! Your intelligence increases by 3.</p>",
    $outcome > 60 && $outcome <= 80 && $playerLevel >= 5 => "<p>You find an enchanted shield! Defence skill improves by 5.</p>",
    $outcome > 80 => "<p>A legendary weapon is bestowed upon you! Strength increases by 10. Your new strength is " . ($strength += 10) . ".</p>",
    default => "<p>You peer in and see nothing but dust.</p>",
};

echo $result;

//DEMO ABOVE
include('includes/footer.php');
?>
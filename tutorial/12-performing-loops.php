<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

echo "<h4>Foreach loops</h4>";
$inventory = ["sword", "shield", "healing potion", "magic scroll"];

// Display the items in the inventory
echo "<p>Your inventory contains:</p>";

echo "<ul>";
foreach ($inventory as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

echo "<p>Gold earned from quests:</p>";

echo "<h4>Foreach loops - Simple example</h4>";
$totalGold = 0;
echo "<ul>";
for ($quest = 1; $quest <= 5; $quest++) { // Loop through 5 quests
    $goldEarned = rand(10, 50); // Random gold for each quest
    $totalGold += $goldEarned;  // Add to the total
    echo "<li>Quest $quest: You earned $goldEarned gold.</li>";
}
echo "</ul>";
echo "<p>Total Gold: $totalGold</p>";

echo "<h4>Foreach loops - Advanced example</h4>";
echo "<p>Prepare for battle!</p>";

// Player starts with 100 health
$playerHealth = 35;

for ($enemy = 1; $enemy <= 3; $enemy++) { // Loop through 3 enemies
    $enemyHealth = rand(20, 50); // Random health for each enemy
    $enemyAttack = rand(5, 15);  // Random attack power for each enemy

    echo "<p>Enemy $enemy approaches! Health: $enemyHealth, Attack Power: $enemyAttack</p>";

    // Combat simulation
    if ($enemyHealth <= 30) {
        echo "<p>You defeat Enemy $enemy quickly with a powerful strike!</p>";
    } else {
        echo "<p>Enemy $enemy puts up a tough fight, dealing $enemyAttack damage to you!</p>";
        $playerHealth -= $enemyAttack; // Reduce player health
    }

    // Check player health after each battle
    if ($playerHealth <= 0) {
        echo "<p>You have been defeated by Enemy $enemy. Game over!</p>";
        break; // Exit the loop if the player is defeated
    }
}

if ($playerHealth > 0) {
    echo "<p>Victory! You survive the battle with $playerHealth health remaining.</p>";
}
//DEMO ABOVE
include('includes/footer.php');
?>
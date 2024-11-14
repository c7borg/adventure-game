<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

echo "<h4>Exploring Functions</h4>";

// Function to simulate exploration in the game
function explore() {
    $encounter = rand(1, 3); // Randomly decides what happens during exploration
    
    if ($encounter === 1) {
        startCombat(20,30);
    } elseif ($encounter === 2) {
        findLoot('a spell book');
    } else {
        echo "<p>The path is quiet... for now.</p>";
    }
}
// Calling the explore function to see what happens
explore();

echo "<h4>Passing Parameters</h4>";
// Function to simulate finding loot
function findLoot($item) {
    echo "<p>You found a $item on your journey!</p>";
}
// Calling the explore function to see what happens
// $item = "a shiny gem";
findLoot("a shiny gem");

echo "<h4>Passing multiple parameters</h4>";
// Function to simulate starting combat, now with player's health and attack as arguments
function startCombat($playerHealth, $playerAttack) {
    // Randomly generate enemy's health and attack power
    $enemyHealth = rand(20, 50);
    $enemyAttack = rand(5, 15);
    
    echo "<p>An enemy appears! Prepare to fight!</p>";
    echo "<p>Enemy Health: $enemyHealth | Enemy Attack: $enemyAttack</p>";
    echo "<p>Your Health: $playerHealth | Your Attack: $playerAttack</p>";
    
    // Simple combat outcome logic based on player and enemy stats
    if ($playerAttack > $enemyHealth) {
        echo "<p>You strike with full force and defeat the enemy!</p>";
    } elseif ($enemyAttack > $playerHealth) {
        echo "<p>The enemy overpowers you. You lose the battle.</p>";
    } else {
        echo "<p>It's a tough battle, but you manage to fend off the enemy!</p>";
    }
}
// Calling the function with example player stats
startCombat(40, 25); // Player's health is 40, and attack is 25

echo "<h4>Using return values</h4>";
// Function to simulate combat and return the outcome message
function startCombat2($playerHealth, $playerAttack) {
    $enemyHealth = rand(20, 50); 
    $enemyAttack = rand(5, 15); 

    // Decide outcome and return a message
    if ($playerAttack > $enemyHealth) {
        return "You strike with full force and defeat the enemy!";
    } elseif ($enemyAttack > $playerHealth) {
        return "The enemy overpowers you. You lose the battle.";
    } else {
        return "It's a tough battle, but you manage to fend off the enemy!";
    }
}

// Calling the function and storing the return value in a variable
$battleResult = startCombat2(40, 25);

// Output the battle result
echo "<p>Battle Result: $battleResult</p>";



//DEMO ABOVE
include('includes/footer.php');
?>
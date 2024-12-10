<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

echo "<h4>Exploring Functions without parameters</h4>";

// Function declaration with no parameters
function findTreasure() {
    // Array of possible treasures
    $treasures = [
        "a glittering sapphire",
        "a pouch of gold coins",
        "an ancient scroll with mysterious runes",
        "a rusty but enchanted sword",
        "a healing potion"
    ];
    
    // Randomly select a treasure
    $randomTreasure = $treasures[array_rand($treasures)];
    
    // Return a message describing the found treasure
    return "You discover $randomTreasure hidden in the shadows!";
}

// Calling the function
$treasureMessage = findTreasure();
echo $treasureMessage;

echo "<h4>Exploring Functions with parameters</h4>";

// Declaration with parameters for base value and bonus percentage
function applyBonus($baseValue, $bonusPercentage = 10) {
    return $baseValue + ($baseValue * ($bonusPercentage / 100)); // Calculates the new value with the bonus
}

// Calling the function with arguments
$baseDamage = 50;
$damageWithBonus = applyBonus($baseDamage, 20); // Applying a 20% bonus
echo "<p>You strike with a powerful blow, dealing $damageWithBonus damage!</p>"; 
// Outputs: You strike with a powerful blow, dealing 60 damage!

// Reusing the function for a different scenario
$baseGold = 100;
$goldWithBonus = applyBonus($baseGold); // Defaults to a 10% bonus
echo "<p>You negotiate with the merchant and earn $goldWithBonus gold for your efforts!</p>"; 

echo "<h4>Variable Scope - Globals</h4>";

$goldCoins = 100; // Global variable

function spendGold($amount) {
    if(isset($goldCoins)){
    $goldCoins -= $amount; // Error: $goldCoins is not accessible here
    } else {
        echo '<p>$goldCoins variable is not accessible here</p>';
    }
}
spendGold(10);

function spendGold2($amount) {
    global $goldCoins; // Grant access to the global variable
    $goldCoins -= $amount;
    echo "<p>We have removed 10 coins from the global variable leaving $goldCoins gold coins</p>";
}

spendGold2(10); // Outputs: Remaining gold: 90

function spendGold3($goldCoins, $amount) {
    $goldCoins -= $amount;
    return "<p>We have removed a further $amount coins from the global variable leaving $goldCoins gold coins</p>";
}

$goldCoinsResult = spendGold3($goldCoins, 10);
echo $goldCoinsResult;

echo "<h4>Check if a function is defined 'is_callable()'</h4>";

// function hello() {
//     return "Hello, World!";
// }

if (is_callable('hello')) {
    echo hello(); // Outputs: Hello, World!
} else {
    echo "The function 'hello' is not callable.";
}

//DEMO ABOVE
include('includes/footer.php');
?>
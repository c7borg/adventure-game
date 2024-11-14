<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

echo "<h4>While loops</h4>";
$collectedItems = 0;
$requiredItems = 5;

while ($collectedItems < $requiredItems) {
    echo "You search and find item number " . ($collectedItems + 1) . "<br>";
    $collectedItems++;
}
echo "You’ve gathered all the items needed to continue your journey.<br>";


echo "<h4>While true loops with no predefined end</h4>";
$steps = 0;

while (true) {
    $steps++;
    echo "You take step number $steps in the maze...<br>";
    
    // End loop if player reaches step 5
    if ($steps === 5) {
        echo "You’ve found an exit from the maze after $steps steps!<br>";
        break;
    }
}


echo "<h4>Breaking from loops</h4>";
$attempts = 0;
$hasFoundKey = false;

while ($attempts < 10) {
    $attempts++;
    echo "Attempt $attempts: Searching for the key...<br>";
    
    // 20% chance to find the key randomly on each attempt
    if (rand(1, 5) === 1) {
        echo "You found the key on attempt $attempts!<br>";
        $hasFoundKey = true;
        break;
    }
}

if ($hasFoundKey) {
    echo "Now that you have the key, you can open the locked door!<br>";
} else {
    echo "You couldn't find the key within the allowed attempts.<br>";
}

//DEMO ABOVE
include('includes/footer.php');
?>
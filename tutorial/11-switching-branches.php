<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

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

//DEMO ABOVE
include('includes/footer.php');
?>
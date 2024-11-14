<?php
$pageTitle = basename(__FILE__, '.php');
include('includes/header.php');


// Player stats
$playerName = "Explorer"; // Player's name as a string
$health = 90; // Starting health as an interger
$skillPoints = 5.5; // Starting score as a float
$alive = true; // This is called a boolean which can be true or false


// Game introduction
echo "Welcome, <strong>{$playerName}!</strong> Your adventure begins with <strong>".$health."</strong> health points and <strong>$skillPoints</strong> skill points. Good luck!\n";

include('includes/footer.php');
?>
<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

echo "<h4>For loops</h4>";
// Number of rooms in the dungeon to explore
$totalRooms = 3;

echo "<p>You enter the dungeon and start exploring...</p>";

// Loop through each room
for ($i = 1; $i <= $totalRooms; $i++) {
    echo "<p>Room $i: ";
    
    // Different encounters for each room
    if ($i === 1) {
        echo "You find a dusty old chest. It creaks open to reveal a shiny key!";
    } elseif ($i === 2) {
        echo "You hear faint whispers... a ghostly figure appears and then vanishes.";
    } elseif ($i === 3) {
        echo "A torch flickers on the wall, revealing an exit sign. You found your way out!";
    }
    
    echo "</p>";
}

echo "<p>You have explored all rooms in the dungeon. Adventure complete!</p>";

//DEMO ABOVE
include('includes/footer.php');
?>
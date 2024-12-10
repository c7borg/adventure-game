<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW
echo "<h4>GET Variables</h4>";
// Get the choice from the URL, defaulting to 'start' if not set
$choice = $_GET['choice'] ?? 'start';

// Output a different message based on the choice
if ($choice === 'forest') {
    echo "You enter the eerie forest, with shadows dancing around you...";
} elseif ($choice === 'castle') {
    echo "You approach the castle, its towering walls casting a long shadow.";
} else {
    echo "You stand at a crossroads, unsure of which path to take.";
}
?>

<!-- Provide links to test different choices -->
<h4>Choose Your Path:</h4>
<ul>
    <li><a href="?choice=forest">Go to the Forest</a></li>
    <li><a href="?choice=castle">Visit the Castle</a></li>
    <li><a href="?choice=start">Stay at the Crossroads</a></li>
</ul>



<?php
//DEMO ABOVE
include('includes/footer.php');
?>
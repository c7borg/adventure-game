<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW
echo "<h4>POST Variables</h4>";

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the choice from the POST data
    $choice = $_POST['choice'] ?? 'start'; // Default to 'start' if 'choice' isn't set

    // Output a different message based on the choice
    if ($choice === 'forest') {
        echo "<p>You enter the eerie forest, with shadows dancing around you...</p>";
    } elseif ($choice === 'castle') {
        echo "<p>You approach the castle, its towering walls casting a long shadow.</p>";
    } else {
        echo "<p>You stand at a crossroads, unsure of which path to take.</p>";
    }
}
?>

<!-- Form to submit choices -->
<h4>Choose Your Path:</h4>
<form method="POST" action="">
    <button type="submit" name="choice" value="forest">Go to the Forest</button>
    <button type="submit" name="choice" value="castle">Visit the Castle</button>
    <button type="submit" name="choice" value="start">Stay at the Crossroads</button>
</form>


<?php
//DEMO ABOVE
include('includes/footer.php');
?>
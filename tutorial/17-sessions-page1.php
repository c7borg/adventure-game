<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Set a session variable based on the submitted choice
    $_SESSION['choice'] = $_POST['choice'] ?? 'No choice made'; // Default if not set
    echo "<p>Your choice has been saved!</p>";
}
?>

<!-- Form to submit choices -->
<h4>Choose Your Path:</h4>
<form method="POST" action="">
    <button type="submit" name="choice" value="forest">Go to the Forest</button>
    <button type="submit" name="choice" value="castle">Visit the Castle</button>
    <button type="submit" name="choice" value="start">Stay at the Crossroads</button>
</form>
<p><a href="17-sessions-page2.php">Visit sessions page 2</a></p>
<!-- Display the session array -->
<h4>Session Data:</h4>
<pre><?php print_r($_SESSION); ?></pre>

<?php
//DEMO ABOVE
include('includes/footer.php');
?>
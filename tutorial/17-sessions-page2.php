<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

// Start the session
session_start();
?>

<h4>Page 2: Your Choice</h4>

<?php
// Check if the session variable is set
if (isset($_SESSION['choice'])) {
    // Display the user's choice
    echo "<p>Your previous choice was: " . htmlspecialchars($_SESSION['choice']) . "</p>";
} else {
    echo "<p>No choice was made on the previous page.</p>";
}
?>
<p><a href="17-sessions-page1.php">Back to sessions page 1</a></p>
<!-- Display the session array -->
<h4>Session Data:</h4>
<pre><?php print_r($_SESSION); ?></pre>


<?php
//DEMO ABOVE
include('includes/footer.php');
?>
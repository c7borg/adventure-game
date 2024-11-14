<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('tutorial/includes/header.php');

// Game introduction
?>
<h2>Welcome, to this PHP tutorial</h2>

<p>I'll take you through the key concepts of PHP that will give you the knowledge to create your own applications.</p>



<p>In this tutorial we'll use the concepts to build a simple adventure game that you could use to expand on.</p>

<p>If you haven't already download the zip folder from GitHUB <a href='https://github.com/c7borg/adventure-game'>https://github.com/c7borg/adventure-game</a> and install on your webserver typically <strong>C:\xampp\htdocs</strong> or <strong>C:\wamp64\www</strong> on windows and then play around with the examples.</p>

<h3>On the tutorial page you will find a menu it is best to follow in order</h3>

<h5>Menu</h5>
    <ul class="footer-list">
        <li><a href='tutorial/1-variables.php'>Tutorial - 1st Example</a></li>
        <?php
// Get all files in the current directory
$files = glob('*.php'); // Only match PHP files in the current directory

// Apply natural order sorting for file names
natsort($files);

// Loop through each file and create a link
foreach ($files as $file) {
    // Check if it is a file (not a directory)
    if (is_file($file)) {
        $filenameWithoutExtension = pathinfo($file, PATHINFO_FILENAME); // Get filename without extension
        echo "<li><a href='$file'>" . htmlspecialchars($filenameWithoutExtension) . "</a></li>";
    }
}
        ?>
    </ul>
</footer>


</body>
</html>
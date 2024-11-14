
</div>
<footer>
    <hr>
    <h5>Menu</h5>
    <ul class="footer-list">
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
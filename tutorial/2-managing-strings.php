<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

//Create the variable
$playerName = "Explorer";
//Escaping double quotes
$locationDescription = $playerName. " enters a \"dark\", misty forest.</br>";
//Display the string
echo $locationDescription;

//Using single quotes
$locationDescription = $playerName. ' enters a "dark", misty forest.</br>';
//Display the string
echo $locationDescription;

//Using single quotes
$locationDescription = '$playerName enters a "dark", misty forest.</br>';
//Display the string
echo $locationDescription;


echo "<h2>Different ways of using echo</h2>";

$myNewLocation = "The cave echoed with sounds from the past";

echo "<p>{$myNewLocation}</p>";
?>

<p><?php echo $myNewLocation; ?></p>  

<p><?= $myNewLocation ?></p>

<?php
echo "<h2>Shorthand</h2>";

$myExtraBit = " haunting the silence";
$myNewLocation .= $myExtraBit; //Instead of $myNewLocation = $myNewLocation . $myExtraBit;

echo $myNewLocation;


//DEMO ABOVE
include('includes/footer.php');
?>
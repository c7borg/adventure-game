<?php
$pageTitle = basename(__FILE__, '.php'); // Get the current filename without extension
include('includes/header.php');
//DEMO BELOW

//Create the variable
$playerName = "Hero";
//Construct the string
$locationDescription = "a dark, misty forest with towering trees.<hr>";
//Display the string
// echo $playerName;
// echo $locationDescription;

//Concatenate a string to a varible
$locationDescription = "Enters " . $locationDescription;

//Using periods and quotes to form a string
$locationDescription1 = "1." . $playerName . " enters " . $locationDescription;
//Display the string
echo $locationDescription1;

//Using just quotation marks
$locationDescription2 = "2. $playerName enters $locationDescription";
//Display the string
echo $locationDescription2;

//Using quotation marks and curl braces for clarity and joining words
$locationDescription3 = "3.{$playerName} enters {$locationDescription}";

echo $locationDescription3;

echo "<h2>Displaying php strings</h2>";

echo "<p>{$locationDescription}</p>";
?>

<p><?php echo $locationDescription; ?></p>

<p><?= $locationDescription ?></p>


<?php
//DEMO ABOVE
include('includes/footer.php');
?>
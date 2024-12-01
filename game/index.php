<?php
// Enable error reporting
error_reporting(E_ALL);        // Report all PHP errors
ini_set('display_errors', 1);  // Display errors on the page

session_start();
include('world-array.php'); // Defines the game world

// Initialize player inventory and starting area if they don't exist
if (!isset($_SESSION['current_area'])) {
    $_SESSION['current_area'] = 1;
    $_SESSION['inventory'] = []; // Start with an empty inventory
}

// Handle player input
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $control = $_POST["control"] ?? null;
    $direction = $_POST["direction"] ?? null;
    $action = $_POST["action"] ?? null;
    $current_area = $_SESSION['current_area'];
    //Game reset
    if($control){
        session_destroy();
        header("Location: index.php");
        exit;
    }
    // Handle movement
    if ($direction && isset($world[$current_area]["directions"][$direction])) {
        $_SESSION['current_area'] = $world[$current_area]["directions"][$direction];
        $message = "You move $direction.";
    } elseif ($direction) {
        $message = "You can't go that way.";
    }

    // Handle actions
    if ($action && isset($world[$current_area]["actions"][$action])) {
        $result = $world[$current_area]["actions"][$action];
        $message = is_callable($result) ? $result() : $result;

        // Check if this action grants an item
        if (isset($world[$current_area]["give_item"][$action])) {
            $item = $world[$current_area]["give_item"][$action];
            if (!isset($_SESSION['inventory'][$item])) {
                $_SESSION['inventory'][$item] = true; // Add item to inventory
                $message .= "<br>You have found a $item!";
            }
        }
    } elseif ($action) {
        $message = "Nothing happens.";
    }
}

// Set the background image based on the current area
$current_image = $world[$_SESSION['current_area']]['image'] ?? 'images/default.jpg'; // Default image if none is set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Adventure Game</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>

    body { background-image: url('<?= $current_image ?>'); }
</style>

</head>
<body>
    <div class="container">
        <h1><img style="width:400px" src="images/phpquest-no-bg.png"></h1>
        <p><?php echo $message; ?></p>
        <p><?php echo $world[$_SESSION['current_area']]['description']; ?></p>
        <p>Inventory: <?php echo empty($_SESSION['inventory']) ? 'Nothing' : implode(", ", array_keys($_SESSION['inventory'])); ?></p>

        <form method="post">
            <h3>Choose a Direction:</h3>
            <?php foreach ($world[$_SESSION['current_area']]['directions'] as $direction => $area): ?>
                <button type="submit" name="direction" value="<?php echo $direction; ?>">
                    Go <?php echo ucfirst($direction); ?>
                </button>
            <?php endforeach; ?>
        </form>

        <form method="post">
            <h3>Available Actions:</h3>
            <?php foreach ($world[$_SESSION['current_area']]['actions'] as $action => $response): ?>
                <button type="submit" name="action" value="<?php echo $action; ?>">
                    <?php echo ucfirst($action); ?>
                </button>
            <?php endforeach; ?>
          
        </form>
        <form method="post">
        <h3>Game Control:</h3>
        <button type="submit" name="control" value="quit">Quit</button>
        </form>
        <pre><!-- Pre tags help format the var_dump -->
        <?php
        // var_dump($_SESSION);
        //print($world[$_SESSION['current_area']]['image'])
        ?>
        </pre>

        
    </div>
</body>
</html>
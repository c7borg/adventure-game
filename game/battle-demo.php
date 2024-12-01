<?php
session_start();

// Initialize game if it's the first load
if (!isset($_SESSION['player'])) {
    $_SESSION['player'] = [
        'health' => 100,
        'attack' => 15,
        'defense' => 5,
    ];
    $_SESSION['inventory'] = [
        'potion' => 2,
        'gold' => 50,
    ];
    $_SESSION['message'] = "Welcome to the Dark Forest Adventure!";
    $_SESSION['in_combat'] = false;
}

// Process form actions before rendering the HTML
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($_SESSION['in_combat']) {
        if ($action === 'attack') {
            attackEnemy();
        } elseif ($action === 'flee') {
            attemptFlee();
        }
    } else {
        switch ($action) {
            case 'explore':
                explore();
                break;
            case 'rest':
                rest();
                break;
            case 'quit':
                session_destroy();
                header("Location: index.php");
                exit;
        }
    }
}

function displayHUD() {
    $player = $_SESSION['player'];
    $inventory = $_SESSION['inventory'];

    echo "<div class='hud'>";
    echo "<h3>Player Stats</h3>";
    echo "Health: {$player['health']}<br>";
    echo "Attack: {$player['attack']}<br>";
    echo "Defense: {$player['defense']}<br>";

    if ($_SESSION['in_combat']) {
        $enemy = $_SESSION['enemy'];
        echo "<h3>Enemy Stats</h3>";
        echo "Enemy Health: {$enemy['health']}<br>";
        echo "Enemy Attack: {$enemy['attack']}<br>";
    }

    echo "<h3>Inventory</h3>";
    foreach ($inventory as $item => $quantity) {
        echo ucfirst($item) . ": $quantity<br>";
    }
    echo "</div><hr>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Adventure Game</title>
    <style>
        .hud { border: 1px solid #333; padding: 10px; background: #f4f4f4; }
        .message { padding: 10px; margin: 10px 0; background: #e0e0e0; border-radius: 5px; }
    </style>
</head>
<body>

<h1>Dark Forest Adventure</h1>
<?php displayHUD(); ?>

<div class="message">
    <?php echo $_SESSION['message']; ?>
</div>

<form action="index.php" method="POST">
    <?php if ($_SESSION['in_combat']): ?>
        <button type="submit" name="action" value="attack">Attack</button>
        <button type="submit" name="action" value="flee">Flee</button>
    <?php else: ?>
        <button type="submit" name="action" value="explore">Explore</button>
        <button type="submit" name="action" value="rest">Rest</button>
        <button type="submit" name="action" value="quit">Quit</button>
    <?php endif; ?>
</form>

</body>
</html>

<?php
// Functions for game actions
function explore() {
    $encounter = rand(1, 3);
    if ($encounter === 1) {
        startCombat();
    } elseif ($encounter === 2) {
        findLoot();
    } else {
        $_SESSION['message'] = "The path is quiet... for now.";
    }
}

function startCombat() {
    $_SESSION['enemy'] = [
        'health' => rand(20, 50),
        'attack' => rand(5, 15),
    ];
    $_SESSION['in_combat'] = true;
    $_SESSION['message'] = "An enemy appears! Prepare to fight!";
}

function attackEnemy() {
    $player = &$_SESSION['player'];
    $enemy = &$_SESSION['enemy'];

    $damageToEnemy = max(0, $player['attack'] - rand(0, $enemy['attack']));
    $damageToPlayer = max(0, $enemy['attack'] - $player['defense']);

    $enemy['health'] -= $damageToEnemy;
    $player['health'] -= $damageToPlayer;

    if ($enemy['health'] <= 0) {
        $_SESSION['message'] = "You defeated the enemy!";
        $_SESSION['in_combat'] = false;
        unset($_SESSION['enemy']);
        $player['attack'] += 1;
        findLoot();
    } elseif ($player['health'] <= 0) {
        $_SESSION['message'] = "You were defeated by the enemy. Game Over.";
        session_destroy();
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['message'] = "You hit the enemy for $damageToEnemy damage. Enemy hits back for $damageToPlayer!";
    }
}

function attemptFlee() {
    if (rand(1, 10) > 7) {
        $_SESSION['message'] = "You successfully fled the combat!";
        $_SESSION['in_combat'] = false;
        unset($_SESSION['enemy']);
    } else {
        $_SESSION['message'] = "You try to flee, but the enemy blocks your path!";
        attackEnemy();
    }
}

function rest() {
    $_SESSION['player']['health'] = min(100, $_SESSION['player']['health'] + 10);
    $_SESSION['message'] = "You rest and regain 10 health.";
}

function findLoot() {
    $_SESSION['inventory']['gold'] += rand(10, 30);
    $_SESSION['inventory']['potion'] += 1;
    $_SESSION['message'] = "You found loot! Gold and a potion have been added to your inventory.";
}
?>

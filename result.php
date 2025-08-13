<?php
declare(strict_types=1);

$name = $_GET['name'] ?? 'Guest';
$color = $_GET['color'] ?? '#000000';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result Page</title>
</head>
<body>
    <h1 style="color: <?= htmlspecialchars($color) ?>">
        Hello, <?= htmlspecialchars($name) ?>!
    </h1>
    <p>Your favorite color is: 
        <span style="color: <?= htmlspecialchars($color) ?>">
            <?= htmlspecialchars($color) ?>
        </span>
    </p>

    <a href="index.php">Go Back</a>
</body>
</html>

<?php
// use PSR-12
declare(strict_types=1);
// time server
$serverTime = date('Y-m-d H:i:s');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
     {
    $name = $_POST['name'] ?? '';
    $color = $_POST['color'] ?? '';

    if (trim($name) === '' || trim($color) === '')
         {
        die('Please provide both name and color.');
         }
    header('Location: result.php?name=' . urlencode($name) . '&color=' . urlencode($color), true, 303);
    exit;
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server Time & Form</title>
</head>
<body>
    <h1>Current Server Time: <?= htmlspecialchars($serverTime) ?></h1>

    <!-- use post becuse  i do not want show information in title
    -->
    <form action="" method="POST">
        <label>
            Your Name:
            <input type="text" name="name">
        </label>
        <br><br>
        <label>
            Favorite Color:
            <input type="color" name="color">
        </label>
        <br><br>
        <button type="submit">Submit</button>
    </form>

  
</body>
</html>

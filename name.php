<?php
declare(strict_types=1);

// // send data of type GET
$name = $_GET['name'] ?? '';

if (trim($name) === '') 
    {
    $name = 'Guest';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting Page</title>
</head>
<body>
    <!--
      use GET becouse can shere link with others by the same name
     -->
    <form action="" method="GET">
        <label>
            Enter your name:
            <input type="text" name="name"value="<?= htmlspecialchars($name === 'Guest' ? '' : $name) ?>">
        </label>
        <button type="submit">Greet Me</button>
    </form>

    <h1>Hello, <?= htmlspecialchars($name) ?></h1>
</body>
</html>

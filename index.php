<?php


// time server
$serverTime = date('Y-m-d H:i:s');
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
    <form action="handle_form.php" method="POST">
        <label>
            Your Name:
            <input type="text" name="name" required>
        </label>
        <br><br>
        <label>
            Favorite Color:
            <input type="color" name="color" required>
        </label>
        <br><br>
        <button type="submit">Submit</button>
    </form>

  
</body>
</html>

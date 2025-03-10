<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of PHP GET Method</title>
</head>
<body>
    <?php
    if(isset($_GET["name"])){
        echo "<p>Hello, " . $_GET["name"] . "!</p>";
    }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
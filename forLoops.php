<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>counter</title>
</head>
<body>
    <form action="forLoops.php" method="post">
        <label for="number">Enter a Number: </label>
        <input type="text" name="number"><br><br>

        <input type="submit" value="Start"><br><br>
    </form>
</body>
</html>
<?php
    $number = $_POST["number"];

    for ($i=0; $i < $number; $i++) { 
        echo $i . "<br>";
    }

    for ($i = $number; $i >= 0; $i--) { 
        echo $i . "<br>";
    }
?>
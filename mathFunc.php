<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math</title>
</head>
<body>
    <form action="mathFunc.php" method="post">
        <label for="x">x: </label>
        <input type="text" name="x"><br><br>

        <label for="y">y: </label>
        <input type="text" name="y"><br><br>

        <input type="submit" value="total"><br><br>
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $total = 50*($y)+($x)**2;
    $absolute = abs($x);
    $round = round($x);
    $floor = floor($x);
    $ceil = ceil($x);
    $power = pow($x,$y);
    $max = max($x,$y);
    $min = min($x,$y);
    $pi = pi();
    $random = rand();

    echo"Total is: {$total}<br>";
    echo"Absolute: {$absolute}<br>";
    echo"Round: {$round}<br>";
    echo"floor: {$floor}<br>";
    echo"ceil: {$ceil}<br>";
    echo"power: {$power}<br>";
    echo"Maximum: {$max}<br>";
    echo"Minimum: {$min}<br>";
    echo"pi value: {$pi}<br>";
    echo"Random Value: {$random}    ";

       
?>
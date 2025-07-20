<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting</title>
</head>
<body>
    <form action="ifStatements.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name"><br><br>

        <label for="age">Age: </label>
        <input type="text" name="age"><br><br>

        <input type="submit" value="Check able to vote or not"><br><br>
    </form>
</body>
</html>
<?php
    $name = $_POST["name"];
    $age = $_POST["age"];

    if($age>=18){
        echo"{$name} you are eligible to vote.";
    }
    elseif($age>=0 && $age<18){
        echo"{$name} you are not eligible to vote";
    }
    else{
        echo"{$name} Please enter Valid age number";
    }
?>
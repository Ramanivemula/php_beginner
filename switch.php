<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <form action="switch.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name"><br><br>

        <label for="grade">Grade: </label>
        <input type="text" name="grade"><br><br>

        <input type="submit" value="Check the Result Details"><br><br><br>
    </form>
</body>
</html>

<?php
    $name = $_POST["name"];
    $grade = $_POST["grade"];

    switch ($grade) {
        case 'A':
           echo"{$name} your  grade {$grade}. You did great job. You won Laptop.<br>";
            break;
        
        case 'B':
           echo"{$name} your  grade {$grade}. You did Goog job. You won Mobile Phone.<br>";
            break;

        case 'C':
           echo"{$name} your  grade {$grade}. You did okay okay. You won your favourite dress.<br>";
            break;

        case 'D':
           echo"{$name} your  grade {$grade}. You just pass. You won bag.<br>";
            break;

        case 'E':
           echo"{$name}  your  grade {$grade}. You did poor job. You won Nothing.<br>";
            break;

        case 'F':
           echo"{$name} your  grade {$grade}. You did extremely poor job. You're failed.<br>";
            break;

        default:
            echo"{$name} your  grade {$grade} is not valid";
            break;

    }

?>
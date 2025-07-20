<?php
    echo"Learning Php Ramani Vemula here\n";
    echo"Ready for learning the PHP<br> By Ramani Vemula<br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <body>
    <form action="index.php" method="get">
    <label for="username">username: </label>
    <input type="text"  name="username"><br><br>
    
    <label for="email">Email: </label>
    <input type="text" name="email" ><br><br>

    <label for="password">Password: </label>
    <input type="password" name="password" ><br><br>

    <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
    echo $_GET["username"] . "<br>";
    echo $_GET["password"] . "<br>";  #Writing br methods 
    echo "{$_GET["email"]}  <br>";
?> -->

<body>
    <form action="index.php" method="post">
    <label for="username">username: </label>
    <input type="text"  name="username"><br><br>
    
    <label for="email">Email: </label>
    <input type="text" name="email" ><br><br>

    <label for="password">Password: </label>
    <input type="password" name="password" ><br><br>

    <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
    echo $_POST["username"] . "<br>";
    echo "{$_POST["email"]}  <br>";
    echo $_POST["password"] . "<br>";  #Writing br methods 
?>
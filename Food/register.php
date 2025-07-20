<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Registration</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" required><br><br>
        
        <label for="email">Email: </label>
        <input type="text" name="email" required><br><br>

        <label for="password">Password: </label>
        <input type="password" name="password" required><br><br>

        <input type="submit" name="register" value="Register"><br><br>
    </form>

    <?php
    if (isset($_POST["register"])) {
        // Step 1: Sanitize and trim
        $username = htmlspecialchars(trim($_POST["username"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $password = trim($_POST["password"]);

        // Step 2: Validate
        $errors = [];

        if (empty($username)) {
            $errors[] = "Username is missing.";
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email address.";
        }

        if (empty($password)) {
            $errors[] = "Password is missing.";
        } elseif (strlen($password) < 6) {
            $errors[] = "Password must be at least 6 characters.";
        }

        // Step 3: Show errors or process registration
        if (!empty($errors)) {
            echo "<ul style='color: red;'>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['hashedPassword'] = $hashedPassword;

            echo "<p style='color: green;'>Hello <strong>$username</strong>! Registered successfully!</p>";
            echo "<p><a href='foodPage.php'>Go to Food Page 🍽️</a></p>";

            echo "<p style='color: gray;'>[Debug] Hashed Password: <code>$hashedPassword</code></p>";
        }
    }
    ?>
</body>
</html>

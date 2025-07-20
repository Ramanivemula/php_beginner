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
        // Step 1: Trim input
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        // Step 2: Sanitize
        $username = htmlspecialchars($username);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Step 3: Validate
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

        // Step 4: Output results
        if (!empty($errors)) {
            echo "<ul style='color: red;'>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
            echo "<p style='color: green;'>Hello <strong>$username</strong>! Registered successfully!</p>";
        }
    }
    ?>
</body>
</html>

<?php
include 'includes/autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <form method="POST" action="includes/login.inc.php">
            <label for="email">Email: </label><input type="email" name="email" id="email">
            <label for="password">Password: </label> <input type="password" name="password" id="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
<?php
include 'includes/autoload.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
    <div id="form_container">
        <form action="includes/register.inc.php" method="post">
            <label for="fname">First Name </label><input type="text" name="fname" id="fname">
            <label for="lname">Last Name: </label> <input type="text" name="lname" id="lname">
            <label for="dob">Date of Birth: </label> <input type="date" name="dob" id="dob">
            <label for="email">Email: </label><input type="email" name="email" id="email">
            <label for="password">Password: </label> <input type="password" name="password" id="password">
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
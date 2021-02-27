<?php
include 'includes/autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
</head>
<body>
    <h1>Hello User</h1>
    <table border='3px' cellpadding="2px">
        <tr>
            <th> FullName</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        
        <?php
            $showAllUsers = new UsersView();
            $showAllUsers->showAllUsers();
        ?>
    </table>
    
</body>
</html>
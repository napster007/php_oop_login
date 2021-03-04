<?php
include 'includes/autoload.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components/css/style.css">
    <link rel="stylesheet" type="text/css" href="components/bootstrap-5.0.0/css/bootstrap.min.css">
    <script src="components/bootstrap-5.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Register</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><img src="components/imgs/carousel/1.jpg" height="50px" width="70px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Site Map</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div id="container">
        <form action="includes/register.inc.php" method="post">
        <div class="row">
            <div class="col-7">
                <h1>Register</h1>
            </div>
        </div>
            <div class="row">
                <div class="col-5">
                    <label class="col-3" for="fname">First Name </label>
                    <input type="text" name="fname" id="fname" required />
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <label class="col-3" for="lname">Last Name: </label> 
                    <input type="text" name="lname" id="lname" required />
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <label class="col-3" for="dob">Date of Birth: </label> 
                    <input type="date" name="ubday" id="ubday" required />
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <label class="col-3" for="email">Email: </label>
                    <input type="email" name="email" id="email" required/>
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <label  class="col-3" for="password">Password: </label> 
                    <input type="password" name="password" id="password" required/>
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
            
            
            
           
           
            
        </form>
    </div>
</body>
</html>
<?php
include 'autoload.inc.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['ubday'];
$email = $_POST['email'];
$password = $_POST['password'];

$regUser = new UsersContr();
$regUser->createUser($fname, $lname, $dob, $email, $password);

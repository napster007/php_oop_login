<?php

include 'autoload.inc.php';

$uid = $_GET['uid'];
$fname = $_POST['ufname'];
$lname = $_POST['ulname'];
$dob = $_POST['ubday'];
$email = $_POST['uemail'];
$password = $_POST['upassword'];

$updateSpecUser = new UsersContr();
$updateSpecUser->deleteUser($uid, $fname, $lname, $dob, $email, $password);
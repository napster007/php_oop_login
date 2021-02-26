<?php

include 'autoload.inc.php';

$uemail = $_POST['email'];
$upassword = $_POST['password'];


$logIn = new UsersView();

echo $logIn->verifyUser($uemail,$upassword);
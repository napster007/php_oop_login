<?php

include 'autoload.inc.php';

$uemail = $_POST['uemail'];
$upassword = $_POST['upassword'];


$logIn = new UsersView();

echo $logIn->verifyUser($uemail,$upassword);

/* if($logIn->verifyUser($uemail,$upassword)){
   
    header('Location:../userpage.php');
}else{
    echo "Login error";
} */
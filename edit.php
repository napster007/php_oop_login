<?php
include 'includes/autoload.inc.php';

$uid = $_GET['uid'];
//echo $uid;
$modify = new UsersContr();
echo $modify->getspecificUser($uid);
<?php

include 'includes/autoload.inc.php';

$uid = $_GET['uid'];

$deleteUser = new UsersContr();
$deleteUser->deleteUser($uid);
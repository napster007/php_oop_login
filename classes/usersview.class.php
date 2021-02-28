<?php


class UsersView extends Users{

    public function showUser($uemail, $upassword){
			
        $results = $this->getUser($uemail, $upassword);
        echo "FullName: ".$results[0]['ufname']. ' '. $results[0]['ulname'].'<br/>';
    }

    public function verifyUser($uemail, $upassword){

        $results = $this->getUser($uemail, $upassword);
    }
    ////sHOW ALL USERS IN USERSPAGE.PHP
    public function showAllUsers(){
        $results = $this->getAllUsers();
    }
}
<?php

/// all modifcation to db happens here
class UsersContr extends Users{

    public function createUser($fname, $lname, $dob, $email, $password){

        $this->setUser($fname, $lname, $dob, $email, $password);
        
    }

    public function getspecificUser($uid){

        $this->specificUser($uid);
        
    }

    public function updateUser($uid, $fname, $lname, $dob, $email, $password){
        $this->updateUserById($uid, $fname, $lname, $dob, $email, $password);
    }

    public function deleteUser($uid){
        $this->deleteUserById($uid);
    }
    
}
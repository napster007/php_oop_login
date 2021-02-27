<?php

/// all modifcation to db happens here
class UsersContr extends Users{

    public function createUser($fname, $lname, $dob, $email, $password){

        $this->setUser($fname, $lname, $dob, $email, $password);
        
    }
}
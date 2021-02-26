<?php

class Users extends Dbh{
    
    /////Validation of Login

    protected function getUser($uemail, $upassword){
		$sql="SELECT * FROM users WHERE email = ? AND password = ? ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$uemail, $upassword]);
		
		$results = $stmt->fetchAll();
		
		return $results;
	}
}


<?php

class Users extends Dbh{
    
    /////Validation of Login

    protected function getUser($uemail, $upassword){
		$sql="SELECT * FROM users WHERE email = ? AND upassword = ? ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$uemail, $upassword]);
		
		$results = $stmt->fetchAll();
		
		return $results;
	}

	protected function setUser($fname, $lname, $dob, $email, $password){
		$sql ="INSERT INTO users(ufname,ulname,ubday,email,upassword) VALUES(?,?,?,?,?)";	
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$fname, $lname, $dob, $email, $password]);
		
		if($stmt){
			header('Location:../userpage.php');
		}else{
			echo "Error in registration";
		}
	}
}


<?php

class Users extends Dbh{
    
    /////Validation of Login

    protected function getUser($uemail, $upassword){
		$sql="SELECT * FROM users WHERE uemail = ? AND upassword = ? ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$uemail, $upassword]);
		$results = $stmt->fetchAll();
		

		if($stmt->rowCount() > 0){
			if($results[0]['uemail'] == $uemail && $results[0]['upassword'] == $upassword){
				
				header('Location:../userpage.php?name='.$results[0]['ufname'].'');
		
			}else{
				header('Location:../login.php?stat=loginError');
				
			}

		}else{
			header('Location:../login.php?stat=loginError');
		}

		/* if($stmt->num_rows > 0){
            $row = $stmt->fetch_array();
            return $row;
        }
        else{
            return false;
        } */
		
		
	}

	protected function setUser($fname, $lname, $dob, $email, $password){
		$sql ="INSERT INTO users(ufname,ulname,ubday,uemail,upassword) VALUES(?,?,?,?,?)";	
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$fname, $lname, $dob, $email, $password]);
		
		if($stmt){
			header('Location:../userpage.php');
		}else{
			echo "Error in registration";
		}
	}



	/////Show all users
	protected function getAllUsers(){
		
			$sql ="SELECT* FROM users";	
			$stmt = $this->connect()->query($sql);
			while($row = $stmt->fetch()){
				echo '<tr>';
				echo '<td>'.$row['ufname']. ' '. $row['ulname'].'</td>';
				echo '<td>'.$row['ubday']. '</td>';
				echo '<td>'.$row['uemail'].'</td>';
				echo '<td>'.$row['upassword'].'</td>';
				echo '<td><a href="edit.php?uid='.$row['uid'].'">Edit</a> | <a href="delete.php?uid='.$row['uid'].'">Delete</a></td>';
				echo '</tr>';
			}
		
	}
	
	////////Editng the USer
	protected function specificUser($uid){
		$sql ="SELECT * FROM users WHERE uid = $uid";	
		$stmt = $this->connect()->query($sql);
		$output="";
		$output .= "<form action='includes/edituser.inc.php?uid=$uid' method='POST'>";
		$output .= "<table>";
		while($row = $stmt->fetch()){
			$output .= '<tr>';
			$output .= '<td>First Name: <input type="text" name="ufname" value="'.$row['ufname']. '"> </td>';
			$output .= '</tr>';
			$output .= '<tr>';
			$output .= '<td>Last Name: <input type="text" name="ulname" value="'.$row['ulname']. '"> </td>';
			$output .= '</tr>';
			$output .= '<tr>';
			$output .= '<td>Date of Birth: <input type="date" name="ubday" value="'.$row['ubday']. '"> </td>';
			$output .= '</tr>';
			$output .= '<tr>';
			$output .= '<td>Email: <input type="email" name="uemail" value="'.$row['uemail']. '"> </td>';
			$output .= '</tr>';
			$output .= '<tr>';
			$output .= '<td>Password: <input type="password" name="upassword" value="'.$row['upassword']. '"> </td>';
			$output .= '</tr>';
			$output .= '<tr>';
			$output .= '<td><button type="submit">Update</button></td>';
			$output .= '</tr>';
		}
		$output .= "</table>";
		$output .= "</form>";

		echo $output;
	}


	/////////Delete user by ID
	protected function updateUserById($uid, $fname, $lname, $dob, $email, $password){
		$sql="UPDATE users SET ufname = ?, ulname = ?, ubday = ?, uemail = ?, upassword = ? WHERE uid = ?";
		$stmt = $this->connect()->prepare($sql);
		//$results = $stmt->execute([$fname, $lname, $dob, $email, $password]);

		//$results?$stmt->rowCount():false;
		/* if($results === TRUE){

			header("refresh:1; ../edit.php?uid=".$uid."");

		}else{
			echo "Error in updating";
		} */
		
		$update = $stmt->execute([$fname, $lname, $dob, $email, $password, $uid]);

		if($update){

			header("refresh:1; ../edit.php?uid=$uid");

		}else{
			echo "Error in updaring";
		}
		/* try{
			if($stmt->execute([$fname, $lname, $dob, $email, $password])){

				header("refresh:1; ../edit.php?uid=$uid");
	
			}else{
				echo "Error in updaring";
			}

		}catch(Exception $e){
			echo $e->getMessage();
		} */

	}

		///Deleting USer
	protected function deleteUserById($uid){
		$sql="DELETE FROM users WHERE uid = ?";
		$stmt = $this->connect()->prepare($sql);
		$deleteUser = $stmt->execute([$uid]);

		if($deleteUser){

			header("refresh:1; userpage.php?stat=success");

		}else{
			echo "Error in deleting user";
		}
	}
}


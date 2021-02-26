<?php


class UsersView extends Users{

    public function showUser($uemail, $upassword){
			
        $results = $this->getUser($uemail, $upassword);
        echo "FullName: ".$results[0]['ufname']. ' '. $results[0]['ulname'].'<br/>';
    }

    public function verifyUser($uemail, $upassword){
        $results = $this->getUser($uemail, $upassword);
      //  echo "FullName: ".$results[0]['ufname']. ' '. $results[0]['ulname'].'<br/>';
        if($results > 0){
            header('Location:../userpage.php?name='.$results[0]['ufname'].'');
        }else{
            echo "Something is Wrong!";
        }
    }
}
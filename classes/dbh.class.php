<?php

class Dbh{
	///properties
	private $hostname="localhost";
	private $user="root";
	private $password="";
	private $dbName="php_oop";
	
	//Method
	
	protected function connect(){
		$dsn = 'mysql:host='.$this->hostname.';dbname='.$this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}
}
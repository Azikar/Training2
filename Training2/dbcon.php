<?php
class db{

private $server;
private $username;
private $pass;
private $database;

public function connect()
	{
	$this->server="localhost";
	$this->username="root";
	$this->pass="";
	$this->database="training2";

	$con= new mysqli($this->server,$this->username,$this->pass,$this->database);
	return $con;
	}

}

?>

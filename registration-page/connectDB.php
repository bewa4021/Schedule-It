<?php

	$server = "us-cdbr-iron-east-03.cleardb.net";
	$username = "b93aa055892ff0";
	$password = "a2da8580";
	define('DBNAME', 'users');

	$conn = new mysqli($server, $username, $password, DBNAME);

	if(!$conn){
		die("connection failed : " . mysql_error());
	}
?>

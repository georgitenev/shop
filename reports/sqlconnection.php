<?php
	$username = "root";
	$password = "";
	$host = "localhost";
	$dbname = "shop";
	$mysqli = new mysqli($host,$username,$password,$dbname); //nov obekt-vruzka kam db
	if($mysqli->connect_error) { //connect_error e obekt v klasa mysqli
		die("Connect error");
	}
	
	if (!$mysqli->set_charset("cp1251")) printf("Error loading character set utf8: %s\n", $mysqli->error);
?>
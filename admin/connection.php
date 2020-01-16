<?php

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'travel';

	$conn = mysqli_connect($host,$user,$password,$dbname);

	if(!$conn){

		echo "Database Connection Failed!";

	}

?>
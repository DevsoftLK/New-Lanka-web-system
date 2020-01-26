<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = '2756512_wintan';
$connection = mysqli_connect($server, $user, $pass, $dbname);

//Checking the Database Connection

	if (mysqli_connect_errno())
		{
			die('Database Connection Faild' . mysqli_connect_error());
		} 
		
	//else {echo "Connection Successful";}

?>
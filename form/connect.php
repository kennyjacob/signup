<?php

$server		= "localhost";
$username	= "SSM";
$password	= "09081172115";
$db 		= "mydata";

// Create a connection

$conn = mysqli_connect($server, $username, $password, $db);

// Check Connection
if (!$conn) {
	die("This Connection is Worng:" . mysqli_connect_error());
}

//echo("This Connection is successfull");

?>
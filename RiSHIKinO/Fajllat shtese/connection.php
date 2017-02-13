<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$db = 'projektiv1';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
	if(! $conn )
	{
	die('Could not connect: ' . mysqli_connect_error());
	}
?>
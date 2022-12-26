<?php
	$db_host= "localhost";
	$db_user= "mysql";
	$db_pass= "program";
	$db_base= "bezopasnost";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_base);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>
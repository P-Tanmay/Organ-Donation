<?php
	// Set up connection credentials
	$user = "root";
	$pass = "";
	$url = "localhost";
	$db = "od";

	//$link = mysqli_connect($url, $user, $pass, $db, "8889"); //Mac
	$link = mysqli_connect($url, $user, $pass, $db); //PC

	/* check connection */
	if(mysqli_connect_error()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>

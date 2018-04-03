<?php

	function login($username, $password, $ip) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM login_user WHERE username='{$username}' AND password='{$password}'";
		$user_set = mysqli_query($link, $loginstring);
		// echo $loginstring;
		if(mysqli_num_rows($user_set)){

			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
		$id = $found_user['user_id'];
		$_SESSION['user_id'] = $id;



			redirect_to("admin_index.php");
		}else{
			$message = "Please fill correct information. Username and password is incorrect";
			return $message;
		}

		mysqli_close($link);
	}
?>

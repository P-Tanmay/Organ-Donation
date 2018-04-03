<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = login($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Your details is incorret";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to your admin panel login</title>
<link rel="stylesheet" href="../css/foundation.css">
<link rel="stylesheet" href="../css/main.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<body>
	<?php if(!empty($message)){ echo $message;} ?>
	<form class="login_index_1" action="admin_login.php" method="post">

		<h1 id="adminLog">Login</h1>



		<div class="login_block">
		<input class="inputUser" type="text" placeholder="Username" name="username" value="">
		<br>
		<input class="inputUser" type="password" placeholder="Password" name="password" value="">
		<br><br>
		<input class="logIN" type="submit" name="submit" value="login">
		</div>

		<a class="homeLnk2" href="../index.php">Back to Home Page</a>

	</form>





</body>
</html>

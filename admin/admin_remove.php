<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$part_1_1 = "images";
	$images = getimg($part_1_1);
?>
<!doctype html>
<html>
<head>
<title>Organ Donation Ontario</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/foundation.css">
<link rel="stylesheet" href="../css/main.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<body>
	<h1 class="adminLog">Update your Image</h1>
	<?php
		while($row = mysqli_fetch_array($images)) {
			echo "{$row['cover']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete Image</a><br>";

		}

	?>
	<a class="homeLnk2" href="admin_index.php">Back</a>
</html>

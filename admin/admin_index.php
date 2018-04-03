<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Organ Donation Ontario</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Foundation for Sites</title>
<link rel="stylesheet" href="../css/foundation.css">
<link rel="stylesheet" href="../css/main.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<body>

<div class="admin_index_page">


	<h1 class="adminLog">Welcome, edit your page</h1>
		<a class="logout" href="phpscripts/caller.php?caller_id=logout">LogOut</a><br><br><br><br>

<div class="admin_index_1">
	<a class="homeLnk" href="edit_details.php">Edit Event Details</a><br><br>
	<a class="homeLnk" href="admin_add.php">Edit Event images</a><br><br>
	<a class="homeLnk" href="admin_remove.php">Delete Event images</a><br><br>

</div>

	</div>



	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/what-input.js"></script>
	<script src="js/vendor/foundation.js"></script>
	<script src="js/app.js"></script>
</body>
</html>

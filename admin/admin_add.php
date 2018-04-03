
<!doctype html>
<html>
<head>
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

<?php
	require_once('phpscripts/config.php');

	// $part_1 = "images";
	// $images = getAll($part_1);

	if(isset($_POST['submit'])){
		$cover = $_FILES['cover'];

		$result = addMovie($cover);
		$message = $result;

		// $result = deleteUser($cover);
		// $message = $result;


	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Movie</title>
</head>
<body>
	<?phpif(!empty($message)){ echo $message;}?>
	<form class="add_form" action="admin_add.php" method="post" enctype="multipart/form-data">
		<label class="imgPoster">Image:</label>
		<input  type="file" name="cover" value="">
		<br><br>

	 <input class="Updater2" type="submit" name="submit" value="Add Event Images">
	</form>

	<a class="homeLnk2" href="admin_index.php">Back</a>

</body>
</html>



<script src="../js/vendor/jquery.js"></script>
<script src="../js/vendor/what-input.js"></script>
<script src="../js/vendor/foundation.js"></script>
<script src="../js/app.js"></script>
</body>
</html>

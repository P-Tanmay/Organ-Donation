<?php
	require_once('admin/phpscripts/config.php');

?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Organ Donation Ontario</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<body>

	<div class="container-fluid">

		<header>
			<?php include('includes/header.html');  ?>
		</header>

		<main class="rform">
			<h1 class="hidden"> Register</h1>


		<h1 class="donateHead">GET REGISTERED TODAY</h1>
		<form action="register.php" method="post">
			<h2 class="donateHead2">Be an Organ Donor</h2>
			<h3 class="donateHead3">"Your Donation can benefit upto 75 people and save 8 lives."</h3>
			<h3 class="donateHead3">Please Register to be organ donor.</h3>
			<a target="_blank" class="RegisterLink" href="https://www.ontario.ca/page/organ-and-tissue-donor-registration?utm_source=so&utm_medium=keyword&utm_campaign=original">Click Here To Register As Organ Donor.</a>
			<div class="formcon grid-x grid-padding-x">
				<div class="small-12 cell float-center">
					<h2 class="donateHead2">Ask Us</h2>
					<p class="donateHead3">You can ask any question regarding organ donation by filling the form.</p>
				</div>
				<div class="inliner small-6 cell">
					<input class="float-right formInp" type="text" name="name" value="" placeholder="Enter Your Full Name"><br>
				</div>
				<div class="inliner small-6 cell">
					<input class="formInp" type="email" name="email" value="" placeholder="Enter Your E-mail"><br>
				</div>
				<div class="inliner small-6 cell">
					<input class="float-right formInp" type="tel" name="telephone" value="" placeholder="Enter Your Phone Number"><br>
				</div>
				<div class="inliner small-6 cell">
					<input class="formInp" type="date" name="bday" value=""><br>
				</div>
				<div class="textarea small-12 cell">
					<textarea name="Deails" id="formInp" class="float-center" placeholder="Enter Your Comments" rows="8" cols="80"></textarea>
				</div>
				<button class="knowAbt margSet" type="button" name="button">
					<a href="#">Donate</a>
				</button>
			</div>


			<!-- <input class="knowAbt" type="submit" name="submit" value="Donate"> -->
		</form>

		</main>
		<div class="footer">
			<?php include('includes/footer.html');  ?>
		</div>


  </div>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>

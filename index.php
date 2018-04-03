<?php
	require_once('admin/phpscripts/config.php');


		// $about_organ = "aboutsection";
		// $aboutorgan = getAll($about_organ);

		$part_1 = "od_events";
		$od_events = getAll($part_1);


		$part_1_1 = "images";
		$images = getimg($part_1_1);

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
</head>






<body>
 <div class="container-fluid">


			<header>
				<?php include('includes/header.html');  ?>
			</header>

			<main>
			  <?php	include('includes/home_mainvid.html');  ?>
			</main>




			<div class="home_about">
				<?php include('includes/home_about.html'); ?>
			</div>




			<div class="large-12 event">

				<div class="cms_head">
					<h1 id="event_title">UPCOMING EVENTS</h1>
				</div>


				<div class="small-12 large-6 img_cms">
					<?php
					if(!is_string($images)){
						while($row = mysqli_fetch_array($images)){
							echo "
								 <img class='imgg_cms' src=\"images/{$row['cover']}\" alt=\"{$row['user_id']}\">
							";
						}
					}else{
						echo "<p class=\"error\">{$images}</p>";
					}

					 ?>
					</div>

					<div class="small-12 large-6 events_section">
					 <?php
						 if(!is_string($od_events)){
							 while($row = mysqli_fetch_array($od_events)){
								 echo "


								 	 <h1 class='event_' id='event_head'>{$row['event_head']}</h1>


									 <h2 class='event_' id='event_date'>{$row['event_date']}</h2>


									 <h2 class='event_' id='event_time'>{$row['event_time']}</h2>


									 <h2 class='event_' id='event_venues'>{$row['event_venues']}</h2>


									 <h3 class='event_' id='event_details'>{$row['event_details']}</h3>


								 ";
							 }
						 }else{
							 echo "<p class=\"error\">{$od_events}</p>";
						 }
						 ?>
					</div>
			</div>

			<div class="why">
				<?php include('includes/home_statics.html'); ?>
			</div>

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

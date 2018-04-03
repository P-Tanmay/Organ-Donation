<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();

	// $_SESSION['user_name'];
	$id = 1;
	$part_1 = "od_events";
	// $col = "user_id";
	$details_Change_Form = getAll($part_1, $id);
	$checkout = mysqli_fetch_array($details_Change_Form);
	//echo $checkout;

	if(isset($_POST['submit'])){
		$event_head = trim($_POST['event_head']);
		$event_date = trim($_POST['event_date']);
		$event_time = trim($_POST['event_time']);
		$event_venues = trim($_POST['event_venues']);
		$event_details = trim($_POST['event_details']);

		$result = editevent($id, $event_head, $event_date, $event_time, $event_venues, $event_details);
		$message = $result;
	}
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
	<h2 class="adminLog">Update your event details</h2>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="edit_details.php" method="post">
		<div class="grid-x grid-padding-x">
			<div class="small-12 large-6 cell inliner">
				<label class="clientEvents">Event Name:</label>
				<input class="inputEventsLeft" type="text" placeholder="Enter the Event Name" name="event_head" value=""><br><br>
			</div>
			<div class="small-12 large-6 cell inliner">
				<label class="clientEventsRight">Event Date:</label>
				<input class="inputEvents" type="date" placeholder="Enter the Event Date" name="event_date" value=""><br><br>
			</div>
		</div>


		<div class="grid-x grid-padding-x">
			<div class="small-12 large-6 cell inliner">
				<label class="clientEvents">Event Time:</label>
				<input class="inputEventsLeft" placeholder="Enter the Event Time" type="time" name="event_time" value=""><br><br>
			</div>
			<div class="small-12 large-6 cell inliner">
				<label class="clientEventsRight">Event Venues:</label>
				<textarea class="inputEvents" name="event_venues" placeholder="Enter the Event Venue" value="<?php echo $checkout['event_venues']; ?>"></textarea><br><br>
			</div>
		</div>



		<div class="grid-x grid-padding-x">
			<div class="small-12 float-center cell inliner">
				<label class="clientEventsDetails">Event Details:</label>
				<textarea class="inputEventsDetails" rows="7" placeholder="Enter the Event Details" name="event_details" value="<?php echo $checkout['event_details']; ?>"></textarea><br><br>
			</div>
		</div>






		<input class="Updater" type="submit" name="submit" value="UPDATE">
		<a class="homeLnk23" href="admin_index.php">Back</a>

	</form>

	<script src="../js/vendor/jquery.js"></script>
	<script src="../js/vendor/what-input.js"></script>
	<script src="../js/vendor/foundation.js"></script>
	<script src="../js/app.js"></script>
</body>
</html>

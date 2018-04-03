

<?php
	function addMovie($cover) {
		include("connect.php");
		if($_FILES['cover']['type'] == "image/jpeg" || $_FILES['cover']['type'] == "image/jpg" ){
			$target = "../images/{$cover['name']}";
			 if(move_uploaded_file($_FILES['cover']['tmp_name'], $target)){

			 	$orig = "../images/{$cover['name']}";
			 	$th_copy = "../images/TH_{$cover['name']}";
			 	if(!copy($orig, $th_copy)){
			 		echo "Failed to copy";
			 	}

			 	//$size = getimagesize($orig);
			 	//echo $size[1];
			 	//$image = $cover['name'];
			 	$addstring = "INSERT INTO images VALUES(NULL, '{$cover['name']}')";
			 	//echo $addstring;
			 	$addresult = mysqli_query($link, $addstring);
			 	if($addresult){
			 		$qstring = "SELECT * FROM images ORDER BY user_ID DESC LIMIT 1";
			 		$lastmovie = mysqli_query($link, $qstring);
			 		$row = mysqli_fetch_array($lastmovie);
			 		$lastID = $row['user_id'];
			 		//echo $lastID;
			 		// $genstring = "INSERT INTO tbl_mov_genre VALUES(NULL, {$lastID}, {$genre})";
			 		// $genresult = mysqli_query($link, $genstring);
			 		redirect_to("admin_index.php");
			 	}
			}
		}
		mysqli_close($link);
	}
?>

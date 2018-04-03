<?php

function getAll($part_1) {
	include('connect.php');
	$queryAll = "SELECT * FROM {$part_1}";
	$runAll = mysqli_query($link, $queryAll);
	if($runAll){
		return $runAll;
	}else{
		$error = "There was a problem.  Sorry about your this ;)";
		return $error;
	}
	mysqli_close($link);
}

function getimg($part_1_1) {
	include('connect.php');
	$queryAll = "SELECT * FROM {$part_1_1}";
	$runAll = mysqli_query($link, $queryAll);
	if($runAll){
		return $runAll;
	}else{
		$error = "There was a problem.  Sorry about your luck ;)";
		return $error;
	}
	mysqli_close($link);
}


	// function getAll3($why_organ) {
	// 	include('connect.php');
	// 	$queryAll3 = "SELECT * FROM {$why_organ}";
	// 	$runAll3 = mysqli_query($link, $queryAll3);
	// 	if($runAll3){
	// 		return $runAll3;
	// 	}else{
	// 		$error = "There was a problem accessing this information.  Sorry about your luck ;)";
	// 		return $error;
	// 	}
	// 	mysqli_close($link);
	// }





?>

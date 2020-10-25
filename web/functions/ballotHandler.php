<?php
	session_start();
	require_once 'sql.php';
	if(isset($_SESSION['ID'])){
		$result = queryHandler("SELECT * FROM ballot WHERE ID = " . "7");
		#$row = $result->fetch_array();
		#if($row['voted'] == "false"){
		#	$result = queryHandler('UPDATE ballot SET voted = "true" WHERE id = ' . $_SESSION['ID']);
		#	$_SESSION['vote_result'] = "Congratulations! Your vote was received!";
		#}
		#else{
		#	$_SESSION['vote_result'] = "You have already voted!";
		#}
	}
	else{
		$_SESSION['vote_result'] = "Please login to vote!";
	}
	echo "test";
	#header('Location: ../voteConfirmation.php');
?>
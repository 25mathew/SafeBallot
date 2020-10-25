<?php
	session_start();
	if(issset($_POST['ballot'])){
		#$result = queryHandler("SELECT * FROM ballot WHERE id = 7");
		#$row = $result->fetch_array();
		#if($row['voted'] == "false"){
		#	$result = queryHandler('UPDATE ballot SET voted = "true" WHERE id = ' . $_SESSION['ID']);
		#	$_SESSION['vote_result'] = "Congratulations! Your vote was received!";
		#}
		#else{
		#	$_SESSION['vote_result'] = "You have already voted!";
		#}
		#header('Location: ../voteConfirmation.php');
		echo "hello sir";
	}


?>
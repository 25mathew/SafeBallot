<?php
	require_once 'sql.php';
	if(isset($_POST['username']) && isset($_POST['password'])){
		if(dualHashedQueryHandler($_POST['username'],$_POST['password'],'webcode','mailcode','SELECT * FROM auth')){
			$_SESSION['loggedin'] = "true";
			header('Location: ../vote.html');
		}
		else{
			$_SESSION['error'] = true;
			header('Location: ../voteLogin.php');
		}
	}
?>

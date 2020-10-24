<?php
	require_once 'sql.php';
	if(isset($_POST['username']) && isset($_POST['password'])){
		//$_SESSION['username'] = strtolower(stringClean($_POST['username']));
		$result = queryHandler("SELECT * FROM auth WHERE webcode='" . password_hash($_POST['username'],PASSWORD_DEFAULT) . "'");
		$row = $result->fetch_array();
		if(password_verify($_POST['password'],$row['password'])){
			$_SESSION['loggedin'] = "true";
			exit(header('Location: ballot.php'));
		}
		else{
			echo "nope";
		}
	}
?>

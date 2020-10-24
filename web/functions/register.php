<?php
	require_once 'sql.php';
	if(isset($_POST['SSN']) && isset($_POST['DLN'])){ //
		$webcode = 
		$mailcode =
		$result = queryHandler("SELECT * FROM auth WHERE webcode='" . password_hash($_POST['username'],PASSWORD_DEFAULT) . "'");
		$row = $result->fetch_array();
		if($result->num_rows > 0 && password_verify($_POST['password'],$row['password'])){
			$_SESSION['loggedin'] = "true";
			exit(header('Location: ballot.php'));
		}
		else{
			//invalid combination
			//implement later
		}
	}
	
?>

<?php
	if(issset($_POST['ballot'])){
		$result = queryHandler("SELECT * FROM ballot WHERE id = " . $_SESSION['ID']);
		$row = $result->fetch_array();
		if($row['voted'] == "false"){
			$result = queryHandler('UPDATE ballot SET voted = "true" WHERE id = ' . $_SESSION['ID']);
			echo "congrats you voted";
		}
		else{
			echo "you already voted";
		}
	}


?>
<?php
	require_once 'sql.php';
	if(isset($_POST['SSN']) && isset($_POST['DLN'])){ //
		//if((hashedQueryHandler($_POST['SSN'],'SSN','SELECT * FROM pii') || hashedQueryHandler($_POST['DLN'],'DLN','SELECT * FROM pii'))){ //generate codes, store pii 
		if(!dualHashedQueryHandler($_POST['SSN'],$_POST['DLN'],'SSN','DLN','SELECT * FROM pii')){
			$_SESSION['webcode'] = uniqueCodeHandler("webcode");
			$_SESSION['mailcode'] = uniqueCodeHandler("mailcode");
			assignID();
			$result = queryHandler("INSERT INTO pii (ID,SSN,DLN) VALUES (" . $_SESSION['ID'] . ",'" . password_hash($SSN,PASSWORD_DEFAULT) . "','" . password_hash($DLN,PASSWORD_DEFAULT) . "')");
			$result = queryHandler("INSERT INTO ballot (ID, voted) VALUES (" . $_SESSION['ID'] . ",'false')");
			$result = queryHandler("INSERT INTO auth (ID,webcode,mailcode) VALUES (" . $_SESSION['ID'] . ",'" . password_hash($_SESSION['webcode'],PASSWORD_DEFAULT) . "','" . password_hash($_SESSION['mailcode'],PASSWORD_DEFAULT) . "')");
			//echo $_SESSION['ID'];
			$_SESSION['ID'] = null;
			header('Location: ../IssueUsername.php');
		}
		else{
			//$_SESSION['error'] = true;
			header('Location: ../registerToVote.php');
			//echo "you doofus you absolute bafoon you've been caught attempting identity theft please wait while we contact the police";
			//duplicate SSN or DLN
			//implement later
		}
	}
	function uniqueCodeHandler($type){
		$result = queryHandler("SELECT * FROM auth");
		$code = createRandomCode();
		while($row = $result->fetch_array()){ //Checks for duplicate, pre-existing code
				if($row[$type] == $code){
					return validationCodeHandler($type);
				}
		}

		return $code;

	}
	function createRandomCode() {
    	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '';
		while($i < 24){
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}

		return $pass;

	}
	
?>

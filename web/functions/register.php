<?php
	require_once 'sql.php';
	if(isset($_POST['SSN']) && isset($_POST['DLN'])){ //
		$SSN = stringClean($_POST['SSN']);
		$DLN = stringClean($_POST['DLN']);
		$resultSSN = queryHandler("SELECT * FROM pii WHERE ssn='" . password_hash($SSN,PASSWORD_DEFAULT) . "'");
		$resultDLN = queryHandler("SELECT * FROM pii WHERE dln='" . password_hash($DLN,PASSWORD_DEFAULT) . "'");
		if($resultSSN->num_rows + $resultDLN->num_rows == 0){ //generate codes, store pii 
			$webcode = uniqueCodeHandler("webcode");
			$mailcode = uniqueCodeHandler("mailcode");
			$result = queryHandler("INSERT INTO pii (ssn,dln) VALUES ('" . password_hash($SSN,PASSWORD_DEFAULT) . "','" . password_hash($DLN,PASSWORD_DEFAULT) . "')");
			$result = queryHandler("INSERT INTO ballot (voted) VALUES ('false')");
			$result = queryHandler("INSERT INTO auth (webcode,mailcode) VALUES ('" . password_hash($webcode,PASSWORD_DEFAULT) . "','" . password_hash($mailcode,PASSWORD_DEFAULT) . "')");
			
			
		}
		else{
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

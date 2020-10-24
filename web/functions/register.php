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
	function validationCodeHandler($username){
		$result = queryHandler("SELECT * FROM auth");
		$code = createRandomCode();
		while($row = $result->fetch_array()){ #Checks for duplicate, pre-existing code
				if($row['activation_code'] == $code){
					return validationCodeHandler($username);
				}
		}
		$update_statement = queryHandler("UPDATE auth SET activation_code = '" . $code . "' WHERE username = '" . $username . "'");

		return $code;

	}
	function createRandomCode() {

    		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;

    while($i <= 25){
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }

    return $pass;

}
	
?>

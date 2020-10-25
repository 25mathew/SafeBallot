<?php
	require_once 'global.php';
    function establishSQL(){
        $conn = mysqli_connect("localhost","netvote","","netvote");
        if(!$conn){
            exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
        }
        return $conn;
    }
    function queryHandler($statement){ 
        session_regenerate_id(true);
        return mysqli_query(establishSQL(),$statement);
    }
	function dualHashedQueryHandler($inputOne,$inputTwo,$fieldOne,$fieldTwo,$statement){
		$result = queryHandler($statement);
		while($row = $result->fetch_array()){
			if(password_verify($inputOne,$row[$fieldOne]) && password_verify($inputTwo,$row[$fieldTwo])){
				$_SESSION['ID'] = $row['ID'];
				return true;
			}
		}
		return false;
	}
	function hashedQueryHandler($input,$field,$statement){
		$result = queryHandler($statement);
		while($row = $result->fetch_array()){
			if(password_verify($input,$row[$field])){
				return true;
			}
		}
		return false;
	}
	function assignID(){
		$result = queryHandler("$SELECT * FROM auth");
		$max = 0;
		//while($row = $result->fetch_array()){
		//	if($row['ID'] > $max){
		//		$max = $row['ID'];
		//	}
		//}
		$_SESSION['ID'] = ++$max;
		//$_SESSION['ID'] = 6;
	}
//if(password_verify($_POST['password'],$row['password'])){
 ?>

<?php
	session_start();
	function checkLoginStatus($destination){
		if(!isset($_SESSION['logged_in'])){
			session_destroy();
			session_start();
			header("Location: " . $destination);
		}
	}
	function stringClean($string){
		return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
	}
?>

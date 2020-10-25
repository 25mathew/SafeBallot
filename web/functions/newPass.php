<?php
	session_start();
	$_SESSION['newPass'] = "yes";
	header('Location: ../confimNewPassword.php');

?>
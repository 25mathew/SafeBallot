<?php
	session_start();
	$_SESSION['newPass'] = "yes"; //temporary
	header('Location: ../confimNewPassword.php');

?>
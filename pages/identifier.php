<?php 
	error_reporting(-1);
	ini_set("display_errors", 1);
	session_start();
	
	if(!isset($_SESSION['user']))
		header('location:login.php');
?>
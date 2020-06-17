<?php

    require_once("identifier.php"); 
	require_once("connexionBD.php");

	$id_personel = isset($_POST['id_personel'])?$_POST['id_personel']:'';
	$login = isset($_POST['login'])?$_POST['login']:'';
	$email_personel = isset($_POST['email_personel'])?$_POST['email_personel']:'';
	$role = isset($_POST['role'])?$_POST['role']:'';

	$requeteP = "UPDATE Personel SET login=? ,email_personel=? ,role=? WHERE id_personel=? ";
	$paramsP = array($login,$email_personel,$role,$id_personel);
	$resultatP = $conn->prepare($requeteP);
	$resultatP->execute($paramsP);

	header('location:utilisateurs.php');
?>
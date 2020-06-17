<?php

    require_once("identifier.php"); 
	require_once("connexionBD.php");

	$id_personel = isset($_POST['id_personel'])?$_POST['id_personel']:0;
	echo $id_personel;
	$login = isset($_POST['login'])?$_POST['login']:"";
	$nom_personel = isset($_POST['nom_personel'])?$_POST['nom_personel']:'';
	$prenom_personel = isset($_POST['prenom_personel'])?$_POST['prenom_personel']:'';
	$email_personel = isset($_POST['email_personel'])?$_POST['email_personel']:'';
	$tel_personel = isset($_POST['tel_personel'])?$_POST['tel_personel']:'';
	$sexe = isset($_POST['sexe'])?$_POST['sexe']:'';
	$code_postale_personel = isset($_POST['code_postale_personel'])?$_POST['code_postale_personel']:'';
	$date_naissance_personel = isset($_POST['date_naissance_personel'])?$_POST['date_naissance_personel']:'';

	$requeteP = "UPDATE Personel SET login=?, nom_personel=? ,prenom_personel=? ,email_personel=? ,tel_personel=? ,sexe=? ,code_postale_personel=? ,date_naissance_personel=? WHERE id_personel=? ";
	$paramsP = array($login, $nom_personel,$prenom_personel,$email_personel,$tel_personel,$sexe,$code_postale_personel,$date_naissance_personel,$id_personel);
	$resultatP = $conn->prepare($requeteP);
	$resultatP->execute($paramsP);
	header('location:login.php');
?>
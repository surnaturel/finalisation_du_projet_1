<?php 
	error_reporting(-1);
	ini_set("display_errors", 1);
	session_start();
	
	if(isset($_SESSION['user'])){ // eviter de passer par les url pour suprimer une personne
		require_once("connexionBD.php");
		$id_personel_Domaine_competence = isset($_GET['id_personel_Domaine_competence'])?$_GET['id_personel_Domaine_competence']:0;
		$id_personel = isset($_GET['personel_id'])?$_GET['personel_id']:0;

		$requete=  "DELETE FROM Personel_Domaine_competence WHERE id_personel_Domaine_competence =? ";
		$params = array($id_personel_Domaine_competence);
		$resultat = $conn->prepare($requete);
		$resultat->execute($params);

		$requeteP = "DELETE FROM Personel WHERE id_personel =?";
		$paramsP = array($id_personel);
		$resultatP = $conn->prepare($requeteP);
		$resultatP->execute($paramsP);
		header('location:personel.php');
	}else{
		header('location:login.php');
	}
	

	
?>
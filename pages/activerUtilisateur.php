<?php 
	session_start(); //Une session est lancée avec la fonction session_start().
	if(isset($_SESSION['user'])){
		require_once("connexionBD.php");
		$id_personel = isset($_GET['id_personel'])?$_GET['id_personel']:0;
		$etat = isset($_GET['etat'])?$_GET['etat']:0;

		if ($etat==1){
			$newEtat=0;
		}
		else{
			$newEtat=1;
		}
		$requetePD = "UPDATE Personel SET etat=? WHERE id_personel=? ";
		$paramsPD = array($newEtat,$id_personel);
		$resultatPD = $conn->prepare($requetePD);
		$resultatPD->execute($paramsPD);
		header('location:utilisateurs.php');
	}else{
		header('location:login.php');
	}
?>
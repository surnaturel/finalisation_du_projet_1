<?php 
	error_reporting(-1);
	ini_set("display_errors", 1);
    if(isset($_SESSION['user'])){
		require_once("connexionBD.php");

		$id_personel = isset($_GET['id_personel'])?$_GET['id_personel']:0;
		$login = isset($_GET['login'])?$_GET['login']:'';
	    
		$requeteCont = "SELECT count(*) countP FROM Personel_Domaine_competence WHERE personel_id= $id_personel";
		$resultat_D = $conn->query($requeteCont);
	    $personel_D = $resultat_D->fetch();
	    $nb_D = $personel_D['countP'];
	    echo $nb_D;
	    if ($nb_D==0) {
	    	# code...
	    	$requete = "DELETE FROM Personel WHERE id_personel=?";
	    	$params = array($id_personel);
	    	$resultat = $conn->prepare($requete);
	    	$resultat->execute($params);
	    	header('location:utilisateurs.php');
	    }else{
	    	$msg = "Pupression impossible: Vous devez suprimer les persones qui ont des domaines de competences";
	    	header("location:alerte.php?message=$msg");
	    }
    }else{
		header('location:login.php');
	}
    /*
    $id_personel_Domaine_competence = $personel_D["id_personel_Domaine_competence"];
    $requetePD = "DELETE FROM Personel_Domaine_competence WHERE id_personel_Domaine_competence=? ";
	$paramsPD = array($id_personel_Domaine_competence);
	$resultatPD = $conn->prepare($requetePD);
	$resultatPD->execute($paramsPD);

	$requete=  "DELETE FROM Personel WHERE id_personel =? ";

	echo $id_personel;
	$params = array($id_personel);
	$resultat = $conn->prepare($requete);
	$resultat->execute($params);
	
	//header('location:utilisateurs.php');
*/
	
?>
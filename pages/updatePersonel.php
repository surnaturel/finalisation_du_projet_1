<?php 
    require_once("identifier.php"); 
	require_once("connexionBD.php");

	$id_personel_Domaine_competence = isset($_POST['id_personel_Domaine_competence'])?$_POST['id_personel_Domaine_competence']:0;
	$nom_personel = isset($_POST['nom_personel'])?$_POST['nom_personel']:'';
	$prenom_personel = isset($_POST['prenom_personel'])?$_POST['prenom_personel']:'';
	$email_personel = isset($_POST['email_personel'])?$_POST['email_personel']:'';
	$tel_personel = isset($_POST['tel_personel'])?$_POST['tel_personel']:'';
	$sexe = isset($_POST['sexe'])?$_POST['sexe']:'';
	$code_postale_personel = isset($_POST['code_postale_personel'])?$_POST['code_postale_personel']:'';
	$role = isset($_POST['role'])?$_POST['role']:'';
	$date_naissance_personel = isset($_POST['date_naissance_personel'])?$_POST['date_naissance_personel']:'';
	

	$domaine_competence = "";

	switch ($domaine_competence = $_POST['domaine_competence']) {
	  case "sage femme":
	    break;
	  case "medecin":
	    break;
	  case "ecographiste":
	    break;
	case "aide soignante":
	    break;
	  default:
	case "infirmiere":
	    break;
	case "secretaire":
	    break;
	case "service technique":
	    break;
	case "gardien":
	    break;
	case "tresoriere principal":
	    break;
	case "tresoriere adjoint":
	    break;
	}

	$requeteID = "SELECT * FROM Domaine_competence WHERE domaine_competence = '$domaine_competence' ";
	$resultatID = $conn->query($requeteID);
	$domaine = $resultatID->fetch();
	$id_domaine_competence = $domaine["id_domaine_competence"];
	echo  "id_domaine_competence = " .$id_domaine_competence;
	$requetePersone = "SELECT * FROM Personel WHERE email_personel = '$email_personel'";
	$resultatPersone = $conn->query($requetePersone);
	$personel = $resultatPersone->fetch();
	$id_personel = $personel["id_personel"];
	echo  "<br>id_personel= " .$id_personel;
	$requeteP = "UPDATE Personel SET nom_personel=? ,prenom_personel=? ,email_personel=? ,tel_personel=? ,sexe=? ,code_postale_personel=? ,date_naissance_personel=? ,role=? WHERE id_personel=? ";
	$paramsP = array($nom_personel,$prenom_personel,$email_personel,$tel_personel,$sexe,$code_postale_personel,$date_naissance_personel,$role,$id_personel);
	$resultatP = $conn->prepare($requeteP);
	$resultatP->execute($paramsP);

	echo  "<br> id_personel_Domaine_competence= " .$id_personel_Domaine_competence;
	$requetePD = "UPDATE Personel_Domaine_competence SET domaine_competence_id=? WHERE id_personel_Domaine_competence=? and personel_id=? ";
	$paramsPD = array($id_domaine_competence,$id_personel_Domaine_competence,$id_personel);
	$resultatPD = $conn->prepare($requetePD);
	$resultatPD->execute($paramsPD);

	header('location:personel.php');
?>
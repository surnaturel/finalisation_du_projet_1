<?php 
	require_once("identifier.php");	
	require_once("connexionBD.php");

	$nom_personel = isset($_POST['nom_personel'])?$_POST['nom_personel']:'';
	$prenom_personel = isset($_POST['prenom_personel'])?$_POST['prenom_personel']:'';
	$login = isset($_POST['login1'])?$_POST['login1']:'';
	$email_personel = isset($_POST['email_personel'])?$_POST['email_personel']:'';
	$tel_personel = isset($_POST['tel_personel'])?$_POST['tel_personel']:'';
	$code_postale_personel = isset($_POST['code_postale_personel'])?$_POST['code_postale_personel']:'';
	$date_naissance_personel = isset($_POST['date_naissance_personel'])?$_POST['date_naissance_personel']:'';
	$sexe = isset($_POST['sexe'])?$_POST['sexe']:'';

	$requeteP = "INSERT INTO Personel (nom_personel,prenom_personel,login,email_personel,tel_personel,code_postale_personel,date_naissance_personel,sexe) VALUES(?,?,?,?,?,?,?,?)";
	$paramsP = array($nom_personel,$prenom_personel,$login,$email_personel,$tel_personel,$code_postale_personel,$date_naissance_personel,$sexe);
	$resultatP = $conn->prepare($requeteP);
	$resultatP->execute($paramsP);

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
	echo "la valeur de $domaine_competence = " .$domaine_competence;
	$requeteID = "SELECT * FROM Domaine_competence WHERE domaine_competence = '$domaine_competence' ";
	$resultatID = $conn->query($requeteID);
	$domaine = $resultatID->fetch();
	echo "id_domaine_competence" .$domaine["id_domaine_competence"];
	$requetePersone = "SELECT * FROM Personel WHERE email_personel = '$email_personel'";
	$resultatPersone = $conn->query($requetePersone);
	$personel = $resultatPersone->fetch();
	$id_personel = $personel["id_personel"];

	$requeteInser = "INSERT INTO Personel_Domaine_competence (personel_id,domaine_competence_id) VALUES(?,?)";
	$paramsD = array($personel["id_personel"],$domaine["id_domaine_competence"]);
	$resultatD = $conn->prepare($requeteInser);
	$resultatD->execute($paramsD);

	header('location:personel.php');
?>
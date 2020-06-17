<?php 
	function rechercher_par_login($login){
		global $conn; // va chercher la valeur $coon dans toute l'aplication
		$requete = $conn->prepare("SELECT * FROM Personel WHERE login=?");
		$requete->execute(array($login));
		return $requete->rowCount();
	}

	function rechercher_par_email($email_personel){
		global $conn; // va chercher la valeur de la variable $coon dans toute l'aplication
		$requete = $conn->prepare("SELECT * FROM Personel WHERE email_personel=?");
		$requete->execute(array($email_personel));
		return $requete->rowCount();
	}
	function rechercher_user_par_email($email_personel){
		global $conn;
		$requete = "SELECT * FROM Personel WHERE email_personel=?";
		$params = array($email_personel);
		$resultat = $conn->prepare($requete);
		$resultat->execute($params);
		$user = $resultat->fetch();
		return $user;
	}

?>
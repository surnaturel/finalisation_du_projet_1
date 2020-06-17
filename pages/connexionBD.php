<?php
	$serveur = "localhost";
	$name_utilisateur = 'franck';
	$mot_de_passe= "123";
		try{
			$conn = new PDO("mysql:host=$serveur;dbname=formulaire_accouchement",
			$name_utilisateur, $mot_de_passe);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
		}
		catch(PDOException $e){
			die('Erreur de connexion :' .$e->getMessage());
		}
?>

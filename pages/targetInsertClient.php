<!DOCTYPE html>
<html>
	<head>
		<title>insertion</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$serveur = "localhost";
			$name_utilisateur = 'franck';
			$mot_de_passe= "123";
			echo "je suis connecter <br/>";

			try{
				$conn = new PDO("mysql:host=$serveur;dbname=formulaire_accouchement",
					$name_utilisateur, $mot_de_passe);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				

				$req = $conn->prepare(
					"INSERT INTO Client(nom_client,nom_jeune_fille,prenom_client,date_naissance_client,code_postal,ville,tel_client,email_client,date_debut_grossesse,date_accouchement_prevue,securite_sociale,cmu,ame,vous_savez_pas_beneficiaire,diabete,embolie_pulmonaire_phlebite,hypertention_arterielle,probleme_cardiaques,medicament_deperession,autre_maladie,nb_accouchement,date_accouchement_SHPH)
						VALUES (
						:nom_client,:nom_jeune_fille,:prenom_client,:date_naissance_client,:code_postal,:ville,:tel_client,:email_client,:date_debut_grossesse,:date_accouchement_prevue,:securite_sociale,:cmu,:ame,:vous_savez_pas_beneficiaire,:diabete,:embolie_pulmonaire_phlebite,:hypertention_arterielle,:probleme_cardiaques,:medicament_deperession,:autre_maladie,:nb_accouchement,:date_accouchement_SHPH)"
				);
				$req->bindparam(':nom_client', $nom_client);
				$req->bindparam(':nom_jeune_fille', $nom_jeune_fille);
				$req->bindparam(':prenom_client', $prenom_client);
				$req->bindparam(':date_naissance_client', $date_naissance_client);
				$req->bindparam(':code_postal', $code_postal);
				$req->bindparam(':ville', $ville);
				$req->bindparam(':tel_client', $tel_client);
				$req->bindparam(':email_client', $email_client);
				$req->bindparam(':date_debut_grossesse', $date_debut_grossesse);
				$req->bindparam(':date_accouchement_prevue', $date_accouchement_prevue);
				$req->bindparam(':securite_sociale', $securite_sociale);
				$req->bindparam(':cmu', $cmu);
				$req->bindparam(':ame', $ame);
				$req->bindparam(':vous_savez_pas_beneficiaire', $vous_savez_pas_beneficiaire);
				$req->bindparam(':diabete', $diabete);
				$req->bindparam(':embolie_pulmonaire_phlebite', $embolie_pulmonaire_phlebite);
				$req->bindparam(':hypertention_arterielle', $hypertention_arterielle);
				$req->bindparam(':probleme_cardiaques', $probleme_cardiaques);
				$req->bindparam(':medicament_deperession', $medicament_deperession);
				$req->bindparam(':autre_maladie', $autre_maladie);
				$req->bindparam(':nb_accouchement', $nb_accouchement);
				$req->bindparam(':date_accouchement_SHPH', $date_accouchement_SHPH);

				
				$nom_client = $nom_jeune_fille = $prenom_client = $date_naissance_client = $code_postal = $ville = $tel_client = $email_client = $date_debut_grossesse=$date_accouchement_prevue=$nb_bb=$securite_sociale=$cmu=$ame=$vous_savez_pas_beneficiaire=$diabete=$embolie_pulmonaire_phlebite=$hypertention_arterielle=$probleme_cardiaques=$medicament_deperession=$autre_maladie=$nb_accouchement=$date_accouchement_SHPH="";
				function securisation($donnee){
					$donnee = trim($donnee);
					$donnee = stripslashes($donnee);
					$donnee = strip_tags($donnee);
					return $donnee;
				}
				$nom_client = securisation($_POST['nom_client']);
				$nom_jeune_fille = securisation($_POST['nom_jeune_fille']);
				$prenom_client = securisation($_POST['prenom_client']);
				$date_naissance_client = securisation($_POST['date_naissance']);
				$code_postal = securisation($_POST['code_postal']);
				$ville = securisation($_POST['ville']);
				$tel_client = securisation($_POST['telephone']);
				$email_client = securisation($_POST['email']);
				$date_debut_grossesse = securisation($_POST['date_debut_grossesse']);
				$date_accouchement_prevue = securisation($_POST['date_accouchement_prevue']);
				$securite_sociale = securisation($_POST['securite_sociale']);
				$cmu = securisation($_POST['cmu']);
				$ame = securisation($_POST['ame']);
				$vous_savez_pas_beneficiaire = securisation($_POST['vous_savez_pas_beneficiaire']);
				$diabete = securisation($_POST['diabete']);
				$embolie_pulmonaire_phlebite = securisation($_POST['embolie_pulmonaire_phlebite']);
				$hypertention_arterielle = securisation($_POST['hypertention_arterielle']);
				$probleme_cardiaques = securisation($_POST['probleme_cardiaques']);
				$medicament_deperession = securisation($_POST['medicament_deperession']);
				$autre_maladie = securisation($_POST['autre_maladie']);
				$nb_accouchement = securisation($_POST['nb_accouchement']);
				$date_accouchement_SHPH = securisation($_POST['date_accouchement_SHPH']);
				$req->execute();
				echo 'valeur bien INSERER';
			}
			catch(PDOException $e){
				echo 'Echec : ' .$e->getMessage();
			}
			?>
	</body>
</html>
<?php 
    error_reporting(-1);
    ini_set("display_errors", 1);
	//require_once("identifier.php");  
    require_once("connexionBD.php"); // copier tout le code pour le mettre ici sur cette page
    require_once("../les_fonctions/fonctions.php");

    #echo rechercher_par_login('adm1'). '<br>';

    if ($_SERVER['REQUEST_METHOD']=='POST') { // On ne pourra sipmlement acceder a la page avec la methode GET c'est le formulaire qui declachera la page
    	# code...
    	$login = $_POST['login'];
    	$email_personel = $_POST['email_personel'];
    	$pwd1 = $_POST['pwd1'];
    	$pwd2 = $_POST['pwd2'];
    	$nom_personel = $_POST['nom_personel'];
    	$prenom_personel = $_POST['prenom_personel'];
    	$tel_personel = $_POST['tel_personel'];
    	$code_postale_personel = $_POST['code_postale_personel'];
    	$date_naissance_personel = $_POST['date_naissance_personel'];
    	$sexe = $_POST['sexe'];
    	$domaine_competence = $_POST['domaine_competence'];
    	echo "$login";
    	$validationErrors = array(); // tableau

    	if (isset($login)){
    		$filtreLogin = filter_var($login,FILTER_SANITIZE_STRING);
    		if(strlen($filtreLogin)<4){
    			$validationErrors[] ="Erreur !!! le Login doit contenir au moins 4 caractères ";
    		}
    	}
    	if (isset($pwd1) && isset($pwd2)) {
    		if (empty($pwd1)) {
    			$validationErrors[] = "Erreur !!! Le mote de pas ne doit pas etre vide";
    		}
    		if(($pwd1)!==($pwd2)){
    			$validationErrors[]="Erreur !!! les deux mots de passe ne sont pas identiques";
    		}
    	}
    	if (isset($email_personel)) {
    		$filtreEmail=filter_var($email_personel, FILTER_SANITIZE_EMAIL);

    		if($filtreEmail != true){ 
    			//Si l'email n'est pas bien (filtrer) 
    			$validationErrors = "Erreur !!! Email non valid ";
    		}
    	}
    	
    	if (isset($nom_personel)){
    		$filtreNom_personel = filter_var($nom_personel,FILTER_SANITIZE_STRING);
    		if(strlen($filtreNom_personel)<2){
    			$validationErrors[] ="Erreur !!! le Nom doit contenir au moins 2 caractères ";
    		}
    	}
    	if (isset($prenom_personel)){
    		$filtrePrenom_personel = filter_var($prenom_personel,FILTER_SANITIZE_STRING);
    		if(strlen($filtrePrenom_personel)<2){
    			$validationErrors[] ="Erreur !!! le Prenom doit contenir au moins 2 caractères ";
    		}
    	}
    	if (isset($tel_personel)){
    		$filtreTel_personel = filter_var($tel_personel,FILTER_SANITIZE_NUMBER_INT);
    		if(strlen($filtreTel_personel)<8){
    			$validationErrors[] ="Erreur !!! le telephone doit contenir au moins 8 caractères ";
    		}
    	}
    	if (isset($code_postale_personel)){
    		$filtreCodePostal = filter_var($code_postale_personel,FILTER_SANITIZE_STRING);
    		if(strlen($filtreCodePostal)<6){
    			$validationErrors[] ="Erreur !!! le code postal doit contenir au moins 6 caractères ";
    		}
    	}
    	if (isset($sexe)){
    		if(empty($sexe)){
    			$validationErrors[] ="Erreur !!! Vous avez pas choisit le Sexe ";
    		}
    	}
    	if (isset($validationErrors)) {
    		if(rechercher_par_login($login)==0 && rechercher_par_email($email_personel)==0){
    			$requete = $conn->prepare(
    				'INSERT INTO Personel (login,email_personel,pwd,nom_personel,prenom_personel,code_postale_personel,sexe,date_naissance_personel,tel_personel,role,etat) VALUES (:plogin,:pemail_personel,:ppwd,:pnom_personel,:pprenom_personel,:pcode_postale_personel,:psexe,:pdate_naissance_personel,:ptel_personel,:prole,:petat)'
    			);

    			$requete->execute(array('plogin' =>$login,
    									'pemail_personel' => $email_personel,
    									'ppwd' => md5($pwd1),
    									'pnom_personel' => $nom_personel,
    									'pprenom_personel' => $prenom_personel,
    									'pcode_postale_personel' => $code_postale_personel,
    									'psexe' => $sexe,
    									'pdate_naissance_personel' => $date_naissance_personel,
    									'ptel_personel' => $tel_personel,
    									'prole' => 'personel',
    									'petat' => 0				
    			));
    			$success_msg = 'Felicitation votre compte est crée, mais inactif veillez contacter les administrateurs';
    		}else{
    			if(rechercher_par_login($login)>0){
    				$validationErrors[]='Désolé cet Login existe deja';
    			}if (rechercher_par_email($email_personel)>0) {
    				$validationErrors[]='Désolé cet email exixte deja';
    			}
    		} 
    	}
    	
    }
    //$id_personel =  isset($_GET['id_personel'])?$_GET['id_personel']:0;
    $requet=  "SELECT * FROM Domaine_competence";
    $resultat = $conn->query($requet);
    $personel = $resultat->fetch();
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Nouveau utilisateur</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" media="screen" type="text/css"  href="./public/css/formulaire.css"/> 
	</head>
	<body>
		<div class="container">
			<h1 class="text-center display-3" style="color:blue;" >Creation d'un nouveau compte Professionnel</h1><br>
			<?php 
				if(isset($validationErrors) && !empty($validationErrors)){
					foreach ($validationErrors as $error) {
						# code...
						echo "<div class='alert alert-danger'>" .$error. "</div>";
					}
				}
			?>
			<form  method="POST" action="ajouterUtilisateurs.php">
				<div class="form-group form-row ">
					<div class="form-group col-md-6">
						<label for="login">Login :</label>
						<input type="text" 
						   name="login" 
						   class="form-control" 
						   id="login" 
						   placeholder="taper votre nom d'utilisateur" 
						   minlength="4" 
						   required
						   title="Le login doit contenir au moin 4 caracteres.."
						   autocomplete="off">
					</div>
					<div class="form-group col-md-6">
						<label for="email_personel">Emai :</label>
						<input type="email" 
						   name="email_personel" 
						   class="form-control" 
						   id="email" 
						   placeholder="taper votre email" 
						   required
						   autocomplete="off">
					</div>
				</div>
				<div class="form-group form-row ">
					<div class="form-group col-md-6">
						<label for="pwd1">Mot de passe actuel :</label>
						<input type="password" 
							   name="pwd1" 
							   class="form-control" 
							   id="pwd1" 
							   placeholder="taper votre mot de passe" 
							   minlength="3" 
							   required
							   title="Le mot de passe doit contenir au moin 3 caracteres.."
							   autocomplete="new-password">
					</div>
					<div class="form-group col-md-6">
						<label for="pwd2">Confirmatuon du mot de passe :</label>
						<input type="password" 
						   name="pwd2" 
						   class="form-control" 
						   id="pwd2" 
						   placeholder="Confirmer votre mot de passe" 
						   minlength="3" 
						   required
						   autocomplete="new-password">
					</div>
				</div>
				<div class="form_nom form-row">
                    <div class="form-group col-md-6">
                    	<label for="nom_personel">Nom :</label>
                        <input type="text" name="nom_personel" class="form-control" id="nom_personel" placeholder="Votre Nom de Famille">
                    </div>
                    <div class="form-group col-md-6">
                    	<label for="prenom_personel">Prenom :</label>
                        <input type="text" name="prenom_personel" class="form-control" id="prenom_personel" placeholder="Entrez votre Prenom :">
                    </div>
                </div>
                <div class="form_nom form-row">
                    <div class="form-group  col-md-6">
                    	<label for="tel_personel">Telephone :</label>
                        <input type="tel" name="tel_personel" class="form-control" id="tel_personel" placeholder="Entrez votre numero de telephone :">
                    </div>
                    <div class="form-group col-md-6">
                    	<label for="code_postale_personel">Code Postal :</label>
                        <input type="text" name="code_postale_personel" class="form-control" id="code_postale_personel" placeholder="Entrez votre code postal :">
                    </div>
                </div>
                <div class="form-group form_nom1">
                	<label for="date_naissance_personel">Date n'aissance :</label>
                    <input type="date" name="date_naissance_personel" class="form-control" minlength="8" id="date_naissance_personel" aria-describedby="emailHelp" placeholder="Enter vote date naissance ">
                </div>
                <div class="form-group">
                    <label for="sexe"><strong>Sexe</strong></label><br>
                    <div class="depression_oui" id="sexe">
                        <input type="radio" name="sexe" value="non" id="avez_vous_accou_non">
                        <label for="sexe"><strong>M </strong> (ou) </label>
                        <input type="radio" name="sexe" value="oui" id="avez_vous_accou_oui">
                        <label for="sexe"><strong>F </strong> </label>
                    </div>
                </div>
                <div class="from-group">
                    <label for="domaine_competence">Competence :</label>
                    <select name="domaine_competence" class="form-control" id="             domaine_competence">
                        <option value="aucun"   <?php if($personel["domaine_competence"]=='aucun')   echo 'selected' ?> >Choisir un domaine</option>
                        <option value="sage femme"   <?php if($personel["domaine_competence"]=='sage femme')   echo 'selected' ?> >Sage femme</option>
                        <option value="medecin"   <?php if($personel["domaine_competence"]=='medecin')   echo 'selected' ?> >Medecin</option>
                        <option value="ecographiste"   <?php if($personel["domaine_competence"]=='ecographiste')   echo 'selected' ?> >Ecographiste</option>
                        <option value="aide soignante"   <?php if($personel["domaine_competence"]=='aide soignante')   echo 'selected' ?> >Aide soignante</option>
                        <option value="infirmiere"   <?php if($personel["domaine_competence"]=='infirmiere')   echo 'selected' ?> >Infirmiere</option>
                        <option value="secretaire"   <?php if($personel["domaine_competence"]=='secretaire')   echo 'selected' ?> >Secretaire</option>
                        <option value="service technique"   <?php if($personel["domaine_competence"]=='service technique')   echo 'selected' ?> >Service Technique</option>
                        <option value="gardien"   <?php if($personel["domaine_competence"]=='gardien')   echo 'selected' ?> >Gardien</option>
                        <option value="tresoriere principal"   <?php if($personel["domaine_competence"]=='tresoriere principal')   echo 'selected' ?> >Tresoriere Principal</option>
                        <option value="tresoriere adjoint"   <?php if($personel["domaine_competence"]=='tresoriere adjoint')   echo 'selected' ?> >Tresoriere Adjoint</option>
                    </select><br>
                </div>
				<div id="validation_texte">
                    <p>
                    	<button type="submit" name="envoi" class="btn btn-success mt-2">
                    		<span class="fa fa-save"></span>
                        valider vos Informations
                    </button></p>
                </div>  
			</form>
		</div>
	</body>
</html>
<!DOCTYPE html>
	<html>
	<head>
		<title>Inscription client</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" media="screen" type="text/css"  href="./public/css/formulaire.css"/> 

	</head>
	<body>
		<?php
			include("public/menu.php");
		?>
		<div class="container">
			<div id="en-tete">
				<h3 class="text-center pt-5">Formulaire de demande d’inscription en vue d’un accouchement</h3>
				<p class="text-center">A imprimer et à compléter</p>
			</div>
			<section class="pl-3" id="information_importante">
				<p class="titre-section1"><strong>Informations importantes</strong></p>
				<p>Les demandes d’inscription ont lieu <strong>5 mois avant la date prévue de l’accouchement</strong></p>
				<p>Les demandes d’inscription doivent parvenir au Centre Hospitalier Sud Francilien <strong> à partir du premier
					lundi du mois, pour une période de deux semaines.</strong> Toute demande reçue après la période de
					deux semaines ne sera pas traitée.</p>							
				<p>Ce formulaire dûment complété devra être retourné au Centre Hospitalier Sud Francilien sous
					enveloppe avec :
					<ul>
						<li><strong>une photocopie du compte rendu de l’échographie de datation</strong></li>
						<li><strong>une photocopie de votre pièce d’identité</strong></li>
						<li><strong>une photocopie de justificatif de domicile</strong></li>
					</ul>
				</p>
					<p class="titre-section">Seuls les dossiers complets seront pris en compte</p>
					<p>Vous pouvez nous retourner le dossier en le déposant dans une boîte aux lettres du bureau des
						rendez-vous de gynécologie-obstétrique situé au<span class="titre-section"> rez-de-chaussée du <strong>Pôle A.</strong></span></p>
					<p><strong>Nos places sont limitées à la demande de l’agence régionale de santé afin que nos équipes
						obstétricales puissent assurer une prise en charge optimale et sécurisée, notamment pour les
						femmes dont l’état de grossesse impose un suivi et un accouchement dans une maternité de
						type 3.
						</strong></p>
						<br>
					<p>Vous serez informée de l’acceptation ou du refus de votre demande le mois suivant.
						En cas d’acceptation, nous vous contacterons pour vous donner votre premier rendez-vous avec les
						équipes du Centre Hospitalier Sud Francilien.
						Pour toutes questions relatives à l’inscription merci d’adresser un mail a 
					</p><span></span>
					<a href="#">Inscriptio.maternite@chsf.fr</a>
			</section>
			<div class="container-fluid" id="formulaire">
				<form method="POST" action="targetInsertClient.php" enctype="multipart/form-data">
			 		<h2>Votre Contact</h2>
					<div class="container contact">						
						<div class="form_nom form-row">
							<div class="form-group col-md-5">
      							<label for="nom_client">Entrez votre nom :</label>
      							<input type="text" name="nom_client" class="form-control" id="nom_client" placeholder="Nom">
    						</div>
        					<div class="form-group col-md-5">
      							<label for="nom_jeune_fille">Entrez votre nom de jeune fille :</label>
      							<input type="text" name="nom_jeune_fille" class="form-control" id="nom_jeune_fille" placeholder="Entrez votre nom de jeune fille :">
      							<small id="emailHelp" class="form-text text-muted">Si vous etes mariée .</small>
    						</div>
    					</div>
    					<div class="form_nom form-row">
						    <div class="form-group col-md-5">
      							<label for="prenom_client">Entrez votre nom prenom :</label>
      							<input type="text" name="prenom_client" class="form-control" id="prenom_client" placeholder="Entrez votre prenom :">
    						</div>
   							<div class="form-group col-md-5">
    							<label for="email">Entrez votre email :</label>
    							<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    							<small class="form-text text-muted">We'll never share your email with anyone else.</small>
 							</div>
						</div>
						<div class="form_nom form-row">
        					<div class="form-group  col-md-5">
      							<label for="tel_phone">Entrez votre numero de telephone :</label>
      							<input type="tel" name="tel_phone" class="form-control" id="tel_phone" placeholder="Entrez votre numero de telephone :">
    						</div>
   							<div class="form-group  col-md-5">
    							<label for="ville">Entrez votre ville :</label>
    							<input type="text" name="ville" class="form-control" id="ville" aria-describedby="emailHelp" placeholder="Enter vote ville">
 							</div>
						</div>
						<div class="form_nom form-row">
        					<div class="form-group form_nom1 col-md-5">
      							<label for="code_postal">code postal</label>
      							<input type="text" name="code_postal" class="form-control" id="code_postal" placeholder="Entrez votre code postal :">
    						</div>
   							<div class="form-group form_nom1 col-md-5">
    							<label for="date_naissance_client">Entrez votre date naissance :</label>
    							<input type="date" name="date_naissance_client" class="form-control" id="date_naissance_client" aria-describedby="emailHelp" placeholder="Enter vote date naissance ">
 							</div>
						</div>
					</div>
					<div class="container" id="information-cocher">
						<h2>Information peronelle</h2>
						<p><strong>Etes-vous beneficiare ?</strong></p>
						<div class="form-3 ">
							<input type="checkbox" id="securite_sociale" name="securite_sociale[]" value="securite_sociale">
  							<label for="securite_sociale">De la Securé social</label><br>
  							<input type="checkbox" id="cmu" name="cmu[]" value="cmu">
  							<label for="cmu">De la Couverture Maladie Universelle (CMU)</label><br>
  							<input type="checkbox" id="ame" name="ame[]" value="ame">
  							<label for="ame">De l'aide medicale d'Etat (AME)</label><br>
  							<input type="checkbox" id="vous_savez_pas_beneficiaire" name="vous_savez_pas_beneficiaire[]">
  							<label for="vous_savez_pas_beneficiaire">Vous savez pas ?</label>
						</div>
						<p><strong>Avez vous pour antecedents medicaux ou etes-vous suivie pour une maladie chronique?</strong></p>
							<div class="form-4">
								<input type="checkbox" id="diabete" name="diabete[]" value="diabete">
  								<label for="diabete">Diabète</label><br>
  								<input type="checkbox" id="enbolie_pul_phe" name="enbolie_pul_phe[]" value="enbolie_pul_phe">
  								<label for="enbolie_pul_phe">Embolie pulmonaire, phlébite</label><br>
  								<input type="checkbox" id="hypertention_are" name="hypertention_are[]" value="hypertention_are">
  								<label for="hypertention_are">Hypertention artélielle</label><br>
  								<input type="checkbox" id="probleme_cardiaques" name="probleme_cardiaques[]" value="probleme_cardiaques">
  								<label for="probleme_cardiaques">Probleme cardiaques</label><br>
  								<input type="checkbox" id="drepa" name="0">
  								<label for="pet-select">Drépanocytose (si oui cocher la case et choisiser):</label>
  								<div class="depression_oui" id="hete_homo" style="display:none">
									<select name="hete" class="hete_homo">
									    <option value=0>--Choirir une option--</option>
									    <option value="1">Hétérozygote</option>
									    <option value="2">Homozygote</option>
									</select>
								</div><br>
								<input type="checkbox" id="depression" name="depression">
								<label for="depression_traitemant">Dépression:</label><br>
								<div class="depression_oui"  style="display:none" id="block-depression">	
									<select name="pets" id="depression_traitemant" >
									    <option value="">--Prenez vous un traitemant ?--</option>
									    <option value="oui">oui</option>
									    <option value="non">non</option>
									</select><br>
									<div class="depression_medicament" style="display:none">
										<label for="depression_medicament" >Si vous etes depressive quel medicament vous prenez :</label>
										<input type="text" name="depression_medicament" id="depression_medicament"><br>
									</div>	
								</div>
								<label for="ameliorer"><strong>Si Vous Avez autre maladie (preciser) ?</strong></label><br/>
       							<textarea name="ameliorer" rows="4" cols="35" id="ameliorer"></textarea>
							</div>
							<br>
							<div class="form-5">
								<label for="nb_accouchement"><strong>Combien d’accouchement(s) avez-vous eu ?</strong></label>
								<input type="number" name="0" id="nb_accouchement">
							</div>
							<br>
							<div class="form-6">
								<label for="avez_vous_accou"><strong> Avez-vous déjà accouché au Cabinet SHIPHRAT ? </strong></label><br>
								<div class="depression_oui" id="avez_vous_accou">
									<input type="radio" name="avez_vous_accou" value="avez_vous_accou_non" id="avez_vous_accou_non">
									<label for="avez_vous_accou"><strong>NON </strong> (ou)</label>
									<input type="radio" name="avez_vous_accou" value="avez_vous_accou_oui" id="avez_vous_accou_oui">
									<label for="avez_vous_accou"><strong>OUI </strong> </label>
									<div class="date_Accouchement" style="display:none">
										<label for="date_Accouchement"> Si oui, à quelle(s) date(s) ? :</label>
										<input type="date" name="date_Accouchement" id="date_Accouchement"><br>
									</div>							
								</div>
							</div>	
							<br>
							<div class="form-7">
								<label for="personelle_CSHSF"><strong> Faites-vous partie du personnel travaillant au CSHSF ? </strong></label><br>
								<div class="depression_oui" id="personelle_CSHSF">
									<input type="checkbox" name="personelle_CSHSF" value="personelle_CSHSF_non" id="personelle_CSHSF_non">
									<label for="personelle_CSHSF_non"><strong>NON</strong> (ou)</label>
									<input type="checkbox" name="personelle_CSHSF" value="personelle_CSHSF_oui" id="personelle_CSHSF_oui">
									<label for="personelle_CSHSF_oui"><strong>OUI</strong></label>
									<div class="numero_matricule" style="display:none">
										<label for="numero_matricule"> Si oui, votre n° de matricule est :</label>
									    <input type="text" name="numero_matricule" id="numero_matricule"><br>
									</div>					
								</div>
							</div>			
						</div>
						<h2>Antécédents des <span class="titre-section">Grossesses Précédentes</span></h2>
						<div id="grosesses_precedente">
							<label for="diagnostic_antenatal"><strong> Prise en charge au diagnostic anténatal</strong></label>
							<div class="depression_oui" id="diagnostic1">
								<input type="radio" name="syndrone_malformatif" value="syndrone_malformatif" id="syndrone_malformatif">
								<label for="syndrone_malformatif">Syndrome malformatif </label><br>
								<input type="radio" name="mort_fœtale[]" value="mort_fœtale" id="mort_fœtale">
								<label for="mort_fœtale">Mort fœtale in utéro </label><br>
								<input type="radio" name="iso_immunisation_rhésuss[]" value="iso_immunisation_rhésuss" id="iso_immunisation_rhésuss">
								<label for="iso-immunisation_rhésuss">Iso-immunisation Rhésus</label><br>
							</div><br>
							<label for="avez_vous_accou_F"><strong> Avez-vous déjà fait des Fausses couches? </strong></label>
								<div class="depression_oui" id="avez_vous_accou_F">
									<input type="checkbox" name="avez_vous_accou_F" value="avez_vous_accou_F_non" id="avez_vous_accou_F_non">
									<label for="avez_vous_accou_F_non"><strong>NON</strong> (ou)</label>
									<input type="checkbox" name="avez_vous_accou_F" value="avez_vous_accou_F_oui" id="avez_vous_accou_F_oui">
									<label for="avez_vous_accou_F_oui"><strong>OUI</strong></label>	
									<div class="nombre-fausse_couche" style="display:none">
										<label for="nombre-fausse_couche"> Si oui, le nombre :</label>
										<input type="number" name="nombre-fausse_couche" id="nombre-fausse_couche">
									</div>							
								</div><br>
							<input type="checkbox" id="fausses_couche_4" name="fausses_couche_4[]" value="fausses_couche_4">
							<label for="fausses_couche_4">Fausse couche tardive (après 4 mois):</label><br>
							<input type="checkbox" id="cerclage_col" name="cerclage_col[]" value="cerclage_col">
							<label for="cerclage_col"> Cerclage du col :</label><br>
							<input type="checkbox" id="menace_AP" name="menace_AP[]" value="menace_AP">
							<label for="menace_AP">Menace d’accouchement prématuré </label><br>
							<input type="checkbox" id="diabete_gestationel" name="diabete_gestationel[]" value="diabete_gestationel">
							<label for="diabete_gestationel">Diabète  gestationnel </label><br>
							<input type="checkbox" id="hyp_art_antecedent" name="hyp_art_antecedent[]" value="hyp_art_antecedent">
							<label for="hyp_art_antecedent"> Hypertension artérielle</label><br>
							<input type="checkbox" id="pre_eclampsie" name="pre_eclampsie[]" value="pre_eclampsie">
							<label for="pre_eclampsie"> Pré éclampsie</label><br>
							<input type="checkbox" name="ac_avant_8_mois" value='ac_avant_8_mois_valeur' id="ac_avant_8_mois">
							<label for="ac_avant_8_mois"> Accouchement avant le 8ème mois: <strong> préciser le terme</strong></label>
							<div class="preciser_terme" style="display:none">
								<div class="depression_oui">
								<input type="number" name="preciser_terme" id="preciser_terme"><br>
								<input type="radio" name="prise_en-charge_neonatalogie" id="prise_en-charge_neonatalogie">
								<label for="prise_en-charge_neonatalogie">Enfant pris en charge en néonatalogie</label><br>
								<input type="radio" name="poid_bb" id="poid_bb">
								<label for="poid_bb">Poids de naissance : </label>
								<input type="number" name="poid_naissance" id="poid_naissance">
							</div>
							</div><br>
							<input type="checkbox" id="hemotagie_delivrance" name="hemotagie_delivrance[]" value="hemotagie_delivrance">
							<label for="hemotagie_delivrance"> Hémorragie de la délivrance</label><br>
							<input type="checkbox" id="hra" name="hra[]" value="hra">
							<label for="hra">  Hospitalisation en réanimation après votre accouchement </label><br><br>
							<label for="avez_vous_accou_F"><strong>Césarienne(s) </strong></label>
								<div class="depression_oui" id="cesarienne">
									<input type="checkbox" value="cesarienne_non" id="cesarienne_non">
									<label for="cesarienne_non"><strong>NON</strong> (ou)</label>
									<input type="checkbox" value="cesarienne_oui" id="cesarienne_oui">
									<label for="cesarienne_oui"><strong>OUI</strong></label>
									<div class="nombre_cesarienne" style="display:none">
										<label for="nombre_cesarienne"> Si oui, le nombre :</label>
									    <input type="number" name="nombre_cesarienne" id="nombre_cesarienne">
									</div>								
								</div><br>
							<label for="autre_precision"><strong>Si Vous Avez autre (preciser) ?</strong></label><br/>
       						<textarea name="autre_precision" rows="4" cols="65" id="autre_precision"></textarea>
						</div>
						<h2>Grossesse actuelle</h2>
						<div id="grosesses_actuelle">
							<label for="date_debut_Accouchement"> Date de début de grossesse :</label>
							<input type="date" name="date_debut_Accouchement" id="date_debut_Accouchement"><br>
							<label for="date_prevu-accouchement"> Date accouchement prévue :</label>
							<input type="date" name="date_prevu-accouchement" id="date_prevu-accouchement"><br>
							<label for="ac_avant_8_mois">Votre grossesse</label>
							<div class="depression_oui">
								<input type="radio" name="nb_bb" value="simple" id="simple">
								<label for="simple"> Simple</label><br>
								<input type="radio" name="nb_bb" value="gemellaire" id="gemellaire">
								<label for="gemellaire">Gemellaire </label><br>
								<input type="radio" name="nb_bb" value="triple" id="triple">
								<label for="triple">Triple </label><br>
								<input type="radio" name="nb_bb" value="plus" id="plus">
								<label for="plus">Plus ++ </label><br>
							</div>
						</div>
						<h2>Suivi particulier lors de la grossesse actuelle</h2>
						<div id="suivi_grossesse">
							<input type="checkbox" name="prise_charge" id="prise_charge">
							<label for="prise_charge"> Prise en charge au diagnostic anténal :</label><br>
							<div class="depression_oui" style="display:none" id="pathologie1">
								<label for="pathologie">Pour quelle pathologie ?</label><br/>
       							<textarea name="pathologie" rows="4" cols="65" id="pathologie"></textarea>
							</div>
							<input type="checkbox" name="cerclage_col_actuelle[]" id="cerclage_col_actuelle"value="cerclage_col_actuelle">
							<label for="cerclage_col_actuelle"> Cerclage du col  </label><br>
							<input type="checkbox" name="menace_ap_actuelle[]" id="menace_ap_actuelle" value="menace_ap_actuelle">
							<label for="menace_ap_actuelle"> Menace d’accouchement prématuré  </label><br>
							<input type="checkbox" name="diabete_gestationel_actuelle[]" id="diabete_gestationel_actuelle" value="diabete_gestationel_actuelle">
							<label for="diabete_gestationel_actuelle">Diabète gestationnel  </label><br>
							<input type="checkbox" name="hypertension_arterielle_actuelle[]" id="hypertension_arterielle_actuelle" value="hypertension_arterielle_actuelle">
							<label for="hypertension_arterielle_actuelle"> Hypertension artérielle </label><br>
							<input type="checkbox" name="pre_eclampsie_actuelle[]" id="pre_eclampsie_actuelle" value="pre_eclampsie_actuelle">
							<label for="pre_eclampsie_actuelle"> Pré éclampsie </label><br>
							<label for="autre_precision_actuelle"> Autre (à préciser)</label><br/>
       						<textarea name="autre_precision_actuelle" rows="4" cols="65" id="autre_precision_actuelle"></textarea>
       						<br>
       						<label for="traitement_actuelle"> <strong>Traitement actuel :</strong></label><br/>
       						<textarea name="traitement_actuelle" rows="4" cols="65" id="traitement_actuelle"></textarea>
       						<br>
       						<label for="nom-sagefemme"> <strong>Nom du médecin ou de la sage-femme qui suit votre grossesse :</strong></label><br/>
       						<textarea name="nom-sagefemme" id="nom-sagefemme" rows="4" cols="65"></textarea>
       						<br>
						</div>
						<br>
						<div id="validation_texte">
							<p class="texte"><strong>NB :</strong> Les informations recueillies font l'objet d'un traitement informatique destiné à faciliter l’analyse de votre demande. Les destinataires des données sont les équipes médicales et administratives concernées du CH Sud Francilien. Conformément à laloi «informatique et libertés» du 6 janvier 1978, modifiée en 2004, vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent, que vous pouvez exercer en vous adressant au CH Sud Francilien. Vous pouvez également pour des motifs légitimes, vous opposer au traitement des données vous concernant.
							</p>
							<p class="validation">Si Vous attestez toutes vos information veiller valider : <input type="submit" name="validation" id="validation"></p>
						</div>				
					</div>
				</form>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./public/js/index.js"></script>
        <!--<script type="text/javascript" src="./public/js/indexE.js"></script>-->
	</body>
</html>

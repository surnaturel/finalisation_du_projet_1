<!DOCTYPE html>
	<html>
	<head>
		<title>index</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" media="screen" type="text/css"  href="./public/css/formulaire.css"/> 
	</head>
	<body>
		<div id="contenair">
			<div id="menu">
				<?php
					include("public/menu.php");
				?>
			</div>
			<div id="demande_formulaire">
				<div id="information">
					<div id="en-tete">
						<h3>Formulaire de demande d’inscription en vue d’un accouchement</h3>
						<p>A imprimer et à compléter</p>
					</div>
					<section id="information_importante">
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
				</div>
				<div id="formulaire">
					<form method="POST" action="target.php" enctype="multipart/form-data">
						<div id="nom_prenom_date">
							<p> Noms et date de naissance</p>						
							<div class="form_nom">
								<div id="noms">
									<p>
										<label for="nom">Entrez votre nom : </label>
										<input type="text" name="nom" id="nom">
									</p>
									<p>
										<label for="nom_jeune">Entrez votre nom (jeune fille) : </label>
										<input type="text" name="nom_jeune" id="nom_jeune">
									</p>
								</div>
								<div id="prenom_date">
									<p>
										<label for="prenom">Entrez notre prénom : </label>
										<input type="text" name="prenom" id="prenom">
									</p>
									<p>
										<label for="date_naissance">Entrez votre date de naissance : </label>
										<input type="date" name="date_naissance" id="date_naissance">
									</p>
								</div>
							</div>
						</div>
						<div id="adress">
							<p> Mon Adress</p>
							<div class="form_adress">
								<div class="adress">
									<p>
										<label for="ville">Entrez votre Ville : </label>
										<input type="text" name="ville" id="ville">
									</p>
									<p>
										<label for="code_postal">Entrez votre Code Postal : </label>
										<input type="text" name="code_postal" id="code_postal">
									</p>
								</div>
								<div class="numero_telephone">
									<p>
										<label for="email">Entrez votre email : </label>
										<input type="email" name="email" id="email">
									</p>
									<p>
										<label for="telephone">Entrez Votre Numero de telephone : </label>
										<input type="tel" name="telephone" id="telephone">
									</p>
								</div>
							</div>
						</div>
						<h2>Information Personelle</h2>
						<div id="information-cocher">
							<h2>Votre Contact</h2>
							<p><strong>Etes-vous beneficiare ?</strong></p>
							<div class="form-3">
								<input type="checkbox" id="securité_soial" name="securité_soial">
  								<label for="securité_soial">De la Securé social</label><br>
  								<input type="checkbox" id="CMU" name="CMU">
  								<label for="CMU">De la Couverture Maladie Universelle (CMU)</label><br>
  								<input type="checkbox" id="AME" name="AME">
  								<label for="AME">De l'aide medicale d'Etat (AME)</label><br>
  								<input type="checkbox" id="oui-non" name="oui-non">
  								<label for="oui-non">Vous savez pas ?</label>
							</div>
							<p><strong>Avez vous pour antecedents medicaux ou etes-vous suivie pour une maladie chronique?</strong></p>
							<div class="form-4">
								<input type="checkbox" id="diabete" name="diabete">
  								<label for="diabete">Diabète</label><br>
  								<input type="checkbox" id="enbolie_pul-phe" name="enbolie_pul-phe">
  								<label for="enbolie_pul-phe">Embolie pulmonaire, phlébite</label><br>
  								<input type="checkbox" id="hypertention_are" name="hypertention_are">
  								<label for="hypertention_are">Hypertention artélielle</label><br>
  								<input type="checkbox" id="probleme_cardiaques" name="probleme_cardiaques">
  								<label for="probleme_cardiaques">Probleme cardiaques</label><br>
  								<input type="checkbox" id="drepa" name="drepa">
  								<label for="pet-select">Drépanocytose (si oui cocher la case et choisiser):</label>
								<select name="hete" id="hete_homo">
								    <option value="">--Choirir une option--</option>
								    <option value="hete">Hétérozygote</option>
								    <option value="homo">Homozygote</option>
								</select><br>
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
       							<textarea name="ameliorer" rows="8" cols="45" id="ameliorer"></textarea>
							</div>
							<br>
							<div class="form-5">
								<label for="nombre_enfant"><strong>Combien d’accouchement(s) avez-vous eu ?</strong></label>
								<input type="number" name="nombre_enfant" id="nombre_enfant">
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
								<input type="radio" name="diagnostic_antenatal" value="syndrone_malformatif" id="syndrone_malformatif">
								<label for="syndrone_malformatif">Syndrome malformatif </label><br>
								<input type="radio" name="diagnostic_antenatal" value="mort_fœtale" id="mort_fœtale">
								<label for="mort_fœtale">Mort fœtale in utéro </label><br>
								<input type="radio" name="diagnostic_antenatal" value="iso-immunisation_rhésuss" id="iso-immunisation_rhésuss">
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
							<input type="checkbox" id="fausses_couche-4" name="fausses_couche-4">
							<label for="fausses_couche-4">Fausse couche tardive (après 4 mois):</label><br>
							<input type="checkbox" id="cerclage-col" name="cerclage-col">
							<label for="cerclage-col"> Cerclage du col :</label><br>
							<input type="checkbox" id="menace_AP" name="menace_AP">
							<label for="menace_AP">Menace d’accouchement prématuré </label><br>
							<input type="checkbox" id="diabete_gestationel" name="diabete_gestationel">
							<label for="diabete_gestationel">Diabète gestationnel </label><br>
							<input type="checkbox" id="hypertension_arterielle" name="hypertension_arterielle">
							<label for="hypertension_arterielle"> Hypertension artérielle</label><br>
							<input type="checkbox" id="pre_eclampsie" name="pre_eclampsie">
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
							<input type="checkbox" id="hemotagie_delivrance" name="hemotagie_delivrance">
							<label for="hemotagie_delivrance"> Hémorragie de la délivrance</label><br>
							<input type="checkbox" id="HRA" name="HRA">
							<label for="HRA">  Hospitalisation en réanimation après votre accouchement </label><br><br>
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
       						<textarea name="autre_precision" rows="8" cols="85" id="autre_precision"></textarea>
						</div>
						<h2>Grossesse actuelle</h2>
						<div id="grosesses_actuelle">
							<label for="date_debut_Accouchement"> Date de début de grossesse :</label>
							<input type="date" name="date_debut_Accouchement" id="date_debut_Accouchement"><br>
							<label for="date_prevu-accouchement"> Date accouchement prévue :</label>
							<input type="date" name="date_prevu-accouchement" id="date_prevu-accouchement"><br>
							<label for="ac_avant_8_mois">Votre grossesse</label>
							<div class="depression_oui">
								<input type="radio" name="grossesse" value="simple" id="simple">
								<label for="simple"> Simple</label><br>
								<input type="radio" name="grossesse" value="gemellaire" id="gemellaire">
								<label for="gemellaire">Gemellaire </label><br>
								<input type="radio" name="grossesse" value="triple" id="triple">
								<label for="triple">Triple </label><br>
								<input type="radio" name="grossesse" value="plus" id="plus">
								<label for="plus">Plus ++ </label><br>
							</div>
						</div>
						<h2>Suivi particulier lors de la grossesse actuelle</h2>
						<div id="suivi_grossesse">
							<input type="checkbox" name="prise_charge" id="prise_charge">
							<label for="prise_charge"> Prise en charge au diagnostic anténal :</label><br>
							<div class="depression_oui" style="display:none" id="pathologie1">
								<label for="pathologie">Pour quelle pathologie ?</label><br/>
       							<textarea name="pathologie" rows="8" cols="85" id="pathologie"></textarea>
							</div>
							<input type="checkbox" name="cerclage-col-actuelle" id="cerclage-col-actuelle">
							<label for="cerclage-col-actuelle"> Cerclage du col  </label><br>
							<input type="checkbox" name="menace_ap-actuelle" id="menace_ap-actuelle">
							<label for="menace_ap-actuelle"> Menace d’accouchement prématuré  </label><br>
							<input type="checkbox" name="diabete_gestationel_actuelle" id="diabete_gestationel_actuelle">
							<label for="diabete_gestationel_actuelle">Diabète gestationnel  </label><br>
							<input type="checkbox" name="hypertension_arterielle_actuelle" id="hypertension_arterielle_actuelle">
							<label for="hypertension_arterielle_actuelle"> Hypertension artérielle </label><br>
							<input type="checkbox" name="pre_eclampsie_actuelle" id="pre_eclampsie_actuelle">
							<label for="pre_eclampsie_actuelle"> Pré éclampsie </label><br>
							<label for="autre_precision_actuelle"> Autre (à préciser)</label><br/>
       						<textarea name="autre_precision_actuelle" rows="8" cols="85" id="autre_precision_actuelle"></textarea>
       						<br>
       						<label for="traitement_actuelle"> <strong>Traitement actuel :</strong></label><br/>
       						<textarea name="traitement_actuelle" rows="8" cols="85" id="traitement_actuelle"></textarea>
       						<br>
       						<label for="nom-sagefemme"> <strong>Nom du médecin ou de la sage-femme qui suit votre grossesse :</strong></label><br/>
       						<textarea name="nom-sagefemme" id="nom-sagefemme" rows="8" cols="85"></textarea>
       						<br>
						</div>
						<br>
						<div id="validation_texte">
							<p class="texte"><strong>NB :</strong> Les informations recueillies font l'objet d'un traitement informatique destiné à faciliter l’analyse de votre demande. Les destinataires des données sont les équipes médicales et administratives concernées du CH Sud Francilien. Conformément à laloi «informatique et libertés» du 6 janvier 1978, modifiée en 2004, vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent, que vous pouvez exercer en vous adressant au CH Sud Francilien. Vous pouvez également pour des motifs légitimes, vous opposer au traitement des données vous concernant.
							</p>
							<p class="validation">Si Vous attestez toutes vos information veiller valider : <input type="submit" name="validation" id="validation"></p>
							
						</div>				
					</form>
				</div>
			</div>
			<div id="footer">
				<?php
					include("public/footer.php");
				?>			
			</div>
		</div>
		<script type="text/javascript" src="./public/js/index.js"></script>
	</body>
</html>

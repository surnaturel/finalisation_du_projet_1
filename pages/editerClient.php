<?php
    error_reporting(-1);
    ini_set("display_errors", 1);
    require_once("identifier.php");
    require_once("connexionBD.php");
    $id_client =  isset($_GET['id_client'])?$_GET['id_client']:0;
    $requet = "SELECT * FROM Client WHERE id_client = $id_client";
    $resultat = $conn->query($requet);
    $client = $resultat->fetch();
    $hypertention_arterielle = $client['hypertention_arterielle'];
?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Edition d'un Client</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="s²tylesheet" media="screen" type="text/css"  href="./public/css/formulaire.css"/> 
    </head>
    <body>
        <?php
            include("../public/menu.php");
        ?>
        
        <div class="container">
            <div class="jumbotron text-center mt-2">
                <h1>Modification des données de Clients ou Personels</h1>
                 <p>precisez toutes vos donées</p>
            </div>
            <div class="card bg-primary text-white mt-4">
                <div class="card-head">Edition d'un client</div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <form method="POST" action="updateClient.php" class="form">
                        <div class="form_nom form-row">
                            <div class="form-group col-md-6">
                                <label for="nom_client">Entrez votre nom :</label>
                                <input type="text" name="nom_client" class="form-control" id="nom_client" placeholder="Nom" value="<?php echo $client["nom_client"] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nom_jeune_fille">Entrez votre nom de jeune fille :</label>
                                <input type="text" name="nom_jeune_fille" class="form-control" id="nom_jeune_fille" placeholder="Entrez votre nom de jeune fille :" value="<?php echo $client["nom_jeune_fille"] ?>">
                                <small id="emailHelp" class="form-text text-muted">Si vous etes mariée .</small>
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group col-md-6">
                                <label for="prenom_client">Entrez votre nom prenom :</label>
                                <input type="text" name="prenom_client" class="form-control" id="prenom_client" placeholder="Entrez votre prenom :" value="<?php echo $client["prenom_client"] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email_client">Entrez votre email :</label>
                                <input type="email" name="email_client" class="form-control" id="email_client" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $client["email_client"] ?>">
                                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group  col-md-6">
                                <label for="tel_client">Entrez votre numero de telephone :</label>
                                <input type="tel" name="tel_client" class="form-control" id="tel_client" placeholder="Entrez votre numero de telephone :" value="<?php echo $client["tel_client"] ?>">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="ville">Entrez votre ville :</label>
                                <input type="text" name="ville" class="form-control" id="ville" aria-describedby="emailHelp" placeholder="Enter vote ville" value="<?php echo $client["ville"] ?>">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group form_nom1 col-md-6">
                                <label for="code_postal">code postal</label>
                                <input type="text" name="code_postal" class="form-control" id="code_postal" placeholder="Entrez votre code postal :" value="<?php echo $client["code_postal"] ?>">
                            </div>
                            <div class="form-group form_nom1 col-md-6">
                                <label for="date_naissance_client">Entrez votre date naissance :</label>
                                <input type="date" name="date_naissance_client" class="form-control" id="date_naissance_client" aria-describedby="emailHelp" placeholder="Enter vote date naissance" value="<?php echo $client["date_naissance_client"] ?>">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <label for="id_client">Votre identifinat : <?php echo $id_client ?></label>
                            <input type="hidden" name="id_client" class="form-control" id="id_client" placeholder="Enter vote id_client" value="<?php echo $id_client ?>" >
                        </div>
                         <div  class="container" id="information-cocher">
                            <h2 class="text-center">Information peronelle</h2>
                            <p><strong>Etes-vous beneficiare ?</strong></p>
                        <div class="form-3 ">
                            <input type="checkbox" id="securite_sociale" name="securite_sociale" value="securite_sociale" <?php if(!empty($client["securite_sociale"])) echo 'checked' ?>>
                            <label for="securite_sociale">De la Securé social</label><br>
                            <input type="checkbox" id="cmu" name="cmu" <?php if(!empty($client["cmu"])) echo 'checked' ?> value="cmu" >
                            <label for="cmu">De la Couverture Maladie Universelle (CMU)</label><br>
                            <input type="checkbox" id="ame" name="ame" <?php if(!empty($client["ame"])) echo 'checked' ?> value="ame">
                            <label for="ame">De l'aide medicale d'Etat (AME)</label><br>
                            <input type="checkbox" id="vous_savez_pas_beneficiaire" name="vous_savez_pas_beneficiaire" <?php if(!empty($client["vous_savez_pas_beneficiaire"])) echo 'checked' ?> value="vous_savez_pas_beneficiaire">
                            <label for="vous_savez_pas_beneficiaire">Vous savez pas ?</label>
                        </div>
                            <p><strong>Avez vous pour antecedents medicaux ou etes-vous suivie pour une maladie chronique?</strong></p>
                            <div class="form-4">
                                <input type="checkbox" id="diabete" name="diabete" <?php if(!empty($client["diabete"])) echo 'checked' ?> value="diabete">
                                <label for="diabete">Diabète</label><br>
                                <input type="checkbox" id="enbolie_pul_phe" name="enbolie_pul_phe" <?php if(!empty($client["embolie_pulmonaire_phlebite"])) echo 'checked' ?> value="enbolie_pul_phe">
                                <label for="enbolie_pul_phe">Embolie pulmonaire, phlébite</label><br>
                                <input type="checkbox" id="hypertention_are" name="hypertention_are" <?php if(!empty($hypertention_arterielle)) echo 'checked' ?> value="hypertention artélielle">
                                <label for="hypertention_are">Hypertention artélielle</label><br>
                                <input type="checkbox" id="probleme_cardiaques" name="probleme_cardiaques" <?php if(!empty($client["probleme_cardiaques"])) echo 'checked' ?> value="probleme_cardiaques">
                                <label for="probleme_cardiaques">Probleme cardiaques</label><br>
                                <input type="checkbox" id="drepa" name="drepa"  <?php if(!empty($client["drepanocytose"])) echo 'checked' ?>>
                                <label for="pet-select">Drépanocytose (si oui cocher la case et choisiser):</label>
                                <div class="depression_oui" id="hete_homo" style="display:none">
                                    <select name="drepanocytose" class="hete_homo">
                                        <option value="heterozygote" <?php if ($client["drepanocytose"] == "heterozygote") echo "selected" ?>>Hétérozygote</option>
                                        <option value="homozygote" <?php if ($client["drepanocytose"] == "homozygote") echo "selected" ?>>Homozygote</option>
                                    </select>
                                </div><br>
                                <input type="checkbox" id="depression" name="depression" <?php if(!empty($client["depression"])) echo 'checked' ?> value="oui">
                                <label for="depression">Etes vous Dépressif ?:</label><br>
                                <div class="depression_oui"  style="display:none" id="block-depression">
                                    <select name="depression_traitemant" id="depression_traitemant" >
                                        <option value="oui" <?php if(!empty($client["depression"])) echo 'selected' ?>>oui</option>
                                        <option value="non" <?php if(empty($client["depression"])) echo 'selected' ?>>non</option>
                                    </select><br>
                                    <div class="depression_medicament" style="display:none">
                                        <label for="medicament_deperession" >Si vous etes depressive quel medicament vous prenez :</label>
                                        <input type="text" name="medicament_deperession" value="<?php echo $client["medicament_deperession"]?>" id="medicament_deperession"><br>
                                    </div>  
                                </div>
                                <label for="autre_maladie"><strong>Si Vous Avez autre maladie (preciser) ?</strong></label><br/>
                                <textarea name="autre_maladie" rows="4" cols="35" id="autre_maladie"><?php echo $client["commentaire_autre_maladie"] ?></textarea>
                            </div>
                            <br>
                            <div class="form-5">
                                <label for="nb_accouchement"><strong>Combien d’accouchement(s) avez-vous eu ?</strong></label>
                                <input type="number" name="nb_accouchement"   value="<?php echo $client["nb_accouchement"] ?>" id="nb_accouchement">
                            </div>
                            <br>
                            <div class="form-6">
                                <label for="avez_vous_accou"><strong> Avez-vous déjà accouché au Cabinet SHIPHRAT ? </strong></label><br>
                                <div class="depression_oui" id="avez_vous_accou">
                                    <input type="radio" name="avez_vous_accou" <?php if ($client["avez_accouche_SHPH" ]== "non") echo "checked" ?> value="non" id="avez_vous_accou_non">
                                    <label for="avez_vous_accou"><strong>NON </strong> (ou)</label>
                                    <input type="radio" name="avez_vous_accou" <?php if ($client["avez_accouche_SHPH" ]== "oui") echo "checked" ?> value="oui" id="avez_vous_accou_oui">
                                    <label for="avez_vous_accou"><strong>OUI </strong> </label>
                                    <div class="date_Accouchement" style="display:none">
                                        <label for="date_accouchement_SHPH"> Si oui, à quelle(s) date(s) ? :</label>
                                        <input type="date" name="date_accouchement_SHPH" value="<?php echo $client["date_accouchement_SHPH"] ?>" id="date_accouchement_SHPH"><br>
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
                        <h2 class="text-center ">Antécédents des <span class="titre-section">Grossesses Précédentes</span></h2>
                        <div id="grosesses_precedente">
                            <label for="diagnostic_antenatal"><strong> Prise en charge au diagnostic anténatal</strong></label>
                            <div class="depression_oui" id="diagnostic1">
                                <input type="radio" name="diagnostic" value="syndrone_malformatif"  <?php if ($client["diagnostic_precedente" ]== "syndrone_malformatif") echo "checked" ?> id="syndrone_malformatif">
                                <label for="syndrone_malformatif">Syndrome malformatif </label><br>
                                <input type="radio" name="diagnostic" value="mort_foetale" <?php if ($client["diagnostic_precedente" ]== "mort_foetale") echo "checked" ?> id="mort_foetale">
                                <label for="mort_foetale">Mort fœtale in utéro </label><br>
                                <input type="radio" name="diagnostic" value="iso_immunisation_rhésuss" <?php if ($client["diagnostic_precedente" ]== "iso_immunisation_rhésuss") echo "checked" ?>  id="iso_immunisation_rhésuss">
                                <label for="iso_immunisation_rhésuss">Iso-immunisation Rhésus</label><br>
                            </div><br>
                            <label for="avez_vous_accou_F"><strong> Avez-vous déjà fait des Fausses couches? </strong></label>
                                <div class="depression_oui" id="avez_vous_accou_F">
                                    <input type="radio" name="avez_vous_accou_F" value="non"  <?php if ($client["avez_vous_des_fausses_couches" ]== "non") echo "checked" ?> id="avez_vous_accou_F_non">
                                    <label for="avez_vous_accou_F_non"><strong>NON</strong> (ou)</label>
                                    <input type="radio" name="avez_vous_accou_F" value="oui"<?php if ($client["avez_vous_des_fausses_couches" ]== "oui") echo "checked" ?> id="avez_vous_accou_F_oui">
                                    <label for="avez_vous_accou_F_oui"><strong>OUI</strong></label> 
                                    <div class="nombre-fausse_couche" style="display:none">
                                        <label for="nombre-fausse_couche"> Si oui, le nombre :</label>
                                        <input type="number" value="<?php echo $client["nombre_fausse_couche"] ?>" name="nombre_fausse_couche" id="nombre-fausse_couche">
                                    </div>                          
                                </div><br>
                            <input type="checkbox" id="fausses_couche_4" name="fausses_couche_4" <?php if(!empty($client["fausses_couche_4"])) echo 'checked' ?> value="fausses_couche_4">
                            <label for="fausses_couche_4">Fausse couche tardive (après 4 mois):</label><br>
                            <input type="checkbox" id="cerclage_col" name="cerclage_col" <?php if(!empty($client["cerclage_col"])) echo 'checked' ?> value="cerclage_col">
                            <label for="cerclage_col"> Cerclage du col :</label><br>
                            <input type="checkbox" id="menace_AP" name="menace_AP" <?php if(!empty($client["menace_AP"])) echo 'checked' ?> value="menace_AP">
                            <label for="menace_AP">Menace d’accouchement prématuré </label><br>
                            <input type="checkbox" id="diabete_gestationel" name="diabete_gestationel" <?php if(!empty($client["diabete_gestationel"])) echo 'checked' ?> value="diabete_gestationel">
                            <label for="diabete_gestationel">Diabète gestationnel </label><br>
                            <input type="checkbox" id="hyp_art_antecedent" name="hyp_art_antecedent" <?php if(!empty($client["hypertension_arterielle_precedent"])) echo 'checked' ?> value="hyp_art_antecedent">
                            <label for="hyp_art_antecedent"> Hypertension artérielle</label><br>
                            <input type="checkbox" id="pre_eclampsie" name="pre_eclampsie" <?php if(!empty($client["pre_eclampsie"])) echo 'checked' ?> value="pre_eclampsie">
                            <label for="pre_eclampsie"> Pré éclampsie</label><br>
                            <input type="checkbox" name="ac_avant_8_mois" <?php if(!empty($client["accouchement_avant_8_mois"])) echo 'checked' ?> value='oui' id="ac_avant_8_mois">
                            <label for="ac_avant_8_mois"> Accouchement avant le 8ème mois: </label>
                            <div class="preciser_terme" style="display:none">
                                <div class="depression_oui">
                                    <label for="preciser_terme"><strong> préciser le terme</strong></label>
                                    <input type="number" name="preciser_terme" value="<?php echo $client["preciser_terme"] ?>" id="preciser_terme"><br>
                                    <label for="poid_bb"><strong> Poids de naissance : </strong></label>
                                    <input type="number" name="ac_avant_8_mois_poid_bb" value="<?php echo $client["ac_avant_8_mois_poid_bb"] ?>" id="poid_naissance"><br>
                                    <input type="checkbox" name="prise_en_charge_neonatalogie_mois"  <?php if(!empty($client["prise_en_charge_neonatalogie_mois"])) echo 'checked' ?>value="oui" id="prise_en_charge_neonatalogie_mois">
                                    <label for="prise_en_charge_neonatalogie_mois">Enfant pris en charge en néonatalogie</label>
                                </div>
                            </div><br>
                            <input type="checkbox" id="hemotagie_delivrance" name=""  <?php if(!empty($client["hemotagie_delivrance"])) echo 'checked' ?> value="hemotagie_delivrance">
                            <label for="hemotagie_delivrance"> Hémorragie de la délivrance</label><br>
                            <input type="checkbox" id="hra" name="hra"  <?php if(!empty($client["hra"])) echo 'checked' ?> value="hra">
                            <label for="hra">  Hospitalisation en réanimation après votre accouchement </label><br><br>
                            <label for="avez_vous_accou_F"><strong>Césarienne(s) </strong></label>
                                <div class="depression_oui" id="cesarienne">
                                    <input type="radio" name="cesarienne" <?php if ($client["cesarienne" ]== "non") echo "checked" ?> value="non" id="cesarienne_non">
                                    <label for="cesarienne_non"><strong>NON</strong> (ou)</label>
                                    <input type="radio" name="cesarienne" <?php if ($client["cesarienne" ]== "oui") echo "checked" ?> value="oui" id="cesarienne_oui">
                                    <label for="cesarienne_oui"><strong>OUI</strong></label>
                                    <div class="nb_cesarienne" style="display:none">
                                        <label for="nb_cesarienne"> Si oui, le nombre :</label>
                                        <input type="number" name="nb_cesarienne" value="<?php echo $client["nb_cesarienne"] ?>" id="nb_cesarienne">
                                    </div>                              
                                </div><br>
                            <label for="autre_precision"><strong>Si Vous Avez autre (preciser) ?</strong></label><br/>
                            <textarea name="autre_precision" rows="4" cols="65" id="autre_precision"><?php echo $client["commentaire_grossesse_precedente"] ?></textarea>
                        </div>
                        <h2 class="text-center">Grossesse actuelle</h2>
                        <div id="grosesses_actuelle">
                            <label for="date_debut_grossesse"> Date de début de grossesse :</label>
                            <input type="date" name="date_debut_grossesse" value="<?php echo $client["date_debut_grossesse"]?> " id="date_debut_grossesse"><br>
                            <label for="date_accouchement_prevue"> Date accouchement prévue :</label>
                            <input type="date" name="date_accouchement_prevue" value="<?php echo $client["date_accouchement_prevue"]?>" id="date_accouchement_prevue"><br>
                            <label for="ac_avant_8_mois"><strong> Votre grossesse</strong></label>
                            <div class="depression_oui">
                                <input type="radio" name="nb_bb" <?php if ($client["nb_bb" ]== "1") echo "checked" ?> value="1" id="simple">
                                <label for="simple"> Simple</label><br>
                                <input type="radio" name="nb_bb" <?php if ($client["nb_bb" ]== "2") echo "checked" ?> value="2" id="gemellaire">
                                <label for="gemellaire">Gemellaire </label><br>
                                <input type="radio" name="nb_bb" <?php if ($client["nb_bb" ]== "3") echo "checked" ?> value="3" id="triple">
                                <label for="triple">Triple </label><br>
                                <input type="radio" name="nb_bb" <?php if ($client["nb_bb" ]== "4") echo "checked" ?> value="4" id="quatre">
                                <label for="quatre">Quatruplé</label><br>
                                 <input type="radio" name="nb_bb" <?php if ($client["nb_bb" ]== "5") echo "checked" ?> value="5" id="plus">
                                <label for="plus">Cinqtuplé</label><br>
                                 <input type="radio" name="nb_bb" <?php if ($client["nb_bb" ]== "plus") echo "checked" ?> value="plus" id="plus">
                                <label for="plus">Plus ++ </label><br>
                            </div>
                        </div>
                        <h2 class="text-center">Suivi particulier lors de la grossesse actuelle</h2>
                        <div id="suivi_grossesse">
                            <input type="checkbox" name="prise_charge" <?php if(!empty($client["prise_charge_grossesse_actuelle"])) echo 'checked' ?> value="diagnostic anténal actuelle" id="prise_charge">
                            <label for="prise_charge"> Prise en charge au diagnostic anténal :</label><br>
                            <div class="depression_oui" style="display:none" id="pathologie1">
                                <label for="pathologie">Pour quelle pathologie ?</label><br/>
                                <textarea name="pathologie" rows="4" cols="65" id="pathologie"><?php echo $client["quelle_pathologie"] ?></textarea>
                            </div>
                            <input type="checkbox" name="cerclage_col_actuelle" <?php if(!empty($client["cerclage_col_actuelle"])) echo 'checked' ?> id="cerclage_col_actuelle" value="cerclage_col_actuelle">
                            <label for="cerclage_col_actuelle"> Cerclage du col  </label><br>
                            <input type="checkbox" name="menace_ap_actuelle" <?php if(!empty($client["menace_ap_actuelle"])) echo 'checked' ?> id="menace_ap_actuelle" value="menace_ap_actuelle">
                            <label for="menace_ap_actuelle"> Menace d’accouchement prématuré  </label><br>
                            <input type="checkbox" name="diabete_gestationel_actuelle" <?php if(!empty($client["diabete_gestationel_actuelle"])) echo 'checked' ?> value="diabete_gestationel_actuelle" id="diabete_gestationel_actuelle">
                            <label for="diabete_gestationel_actuelle">Diabète gestationnel  </label><br>
                            <input type="checkbox" name="hyp_art_actuelle" <?php if(!empty($client["hyp_art_actuelle"])) echo 'checked' ?> value="hyp_art_actuelle" id="hyp_art_actuelle">
                            <label for="hyp_art_actuelle"> Hypertension artérielle </label><br>
                            <input type="checkbox" name="pre_eclampsie_actuelle" <?php if(!empty($client["pre_eclampsie_actuelle"])) echo 'checked' ?> value="pre_eclampsie_actuelle" id="pre_eclampsie_actuelle">
                            <label for="pre_eclampsie_actuelle"> Pré éclampsie </label><br>
                            <label for="autre_precision_actuelle"> Autre (à préciser)</label><br/>
                            <textarea name="autre_precision_actuelle" rows="4" cols="65" id="autre_precision_actuelle"><?php echo $client["commentaire_grossesse_actuelle"] ?></textarea>
                            <br>
                            <label for="traitement_actuel"> <strong>Traitement actuel :</strong></label><br/>
                            <textarea name="traitement_actuel" rows="4" cols="65" id="traitement_actuel"><?php echo $client["traitement_actuel"] ?></textarea>
                            <br>
                        </div>
                        <br>
                        <div class="form-group">
                                <label for="nom_medecin">Nom du médecin ou de la sage-femme qui suit votre grossesse :</label>
                                <input type="text" name="nom_medecin" class="form-control" id="nom_medecin" placeholder="Nom">
                        </div>
                        <?php if($_SESSION['user']['role']=='admin'){?>
                            <h2 class="text-center"><strong> Partie administrative (réservée au CHSF)</strong></h2>
                            <div class="from-group">
                                <label for="decision"><strong> Decision :</strong></label>
                                <select name="decision" class="form-control" id="decision">
                                    <option value="0"  <?php if ($client["decision"] == 0) echo "selected" ?> >Client en attente</option>
                                    <option value="1"  <?php if ($client["decision"] == 1) echo "selected" ?>>Client refusé</option>
                                    <option value="2"  <?php if ($client["decision"] == 2) echo "selected" ?>>Client accpeté</option>
                                </select>
                            </div><br>
                                <label for="suivi"><strong> SUIVI :</strong></label>
                                <div class="form-8">
                                    <input type="checkbox" id="rdv_32_SA_sageFemme" name="rdv_32_SA_sageFemme" <?php if(!empty($client["rdv_32_SA_sageFemme"])) echo 'checked' ?> value="ok">
                                    <label for="rdv_32_SA-sageFemme">RDV après 32 SA avec sage-femme:</label><br>
                                    <input type="checkbox" id="rdv_32_SA_medecin" name="rdv_32_SA_medecin" <?php if(!empty($client["rdv_32_SA_medecin"])) echo 'checked' ?> value="ok">
                                    <label for="rdv_32_SA_medecin">  RDV après 32 SA avec médecin :</label><br>
                                    <input type="checkbox" id="16_20_medecin" name="16_20_medecin" <?php if(!empty($client["16_20_medecin"])) echo 'checked' ?> value="ok">
                                    <label for="16_20_medecin"> RDV entre 16-20 SA avec médecin</label><br>
                                    <input type="checkbox" id="sage_femme_medecin_ville" name="sage_femme_medecin_ville" <?php if(!empty($client["sage_femme_medecin_ville"])) echo 'checked' ?> value="ok">
                                    <label for="sage_femme_medecin_ville">Suivi par sage-femme de ville ou médecin de ville</label><br>
                                     <input type="checkbox" id=" contexte_social" name=" contexte_social" <?php if(!empty($client["contexte_social"])) echo 'checked' ?> value=" Contexte social">
                                    <label for=" contexte_social"> Contexte social</label><br>
                                    <input type="checkbox" id="grossesse_pathologique" name="grossesse_pathologique" <?php if(!empty($client["grossesse_pathologique"])) echo 'checked' ?> value="Grossesse pathologique">
                                    <label for="grossesse_pathologique"> Grossesse pathologique</label><br>
                                    <input type="checkbox" id="autre_suivi" name="autre_suivi" <?php if(!empty($client["autre_suivi"])) echo 'checked' ?> value="autre_suivi">
                                    <label for="autre_suivi">Autre</label><br>
                                    <textarea name="precision_autre_suivi" id="precision_autre_suivi" rows="4" cols="65"></textarea>
                                </div><br>
                            <?php } ?>
                        <div id="validation_texte" class="text-center">
                            <p class="validation">Si Vous attestez toutes vos information veiller valider :  <button type="submit" class="btn btn-success mt-2"><span class="fa fa-save"    ></span>
                                valider vos Informations</button></p>
                        </div>              
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./public/js/index.js"></script>
        <!--<script type="text/javascript" src="./public/js/indexE.js"></script>-->
    </body>
</html>

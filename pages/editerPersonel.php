<?php 
        require_once("identifier.php"); 
        require_once("connexionBD.php");
        $id_personel_Domaine_competence =  isset($_GET['id_personel_Domaine_competence'])?$_GET['id_personel_Domaine_competence']:0;
        $requet=  "SELECT * FROM Personel INNER JOIN Personel_Domaine_competence ON Personel.id_personel = Personel_Domaine_competence.personel_id INNER JOIN Domaine_competence ON Personel_Domaine_competence.domaine_competence_id = Domaine_competence.id_domaine_competence WHERE id_personel_Domaine_competence = $id_personel_Domaine_competence";

        $resultat = $conn->query($requet);
        $personel = $resultat->fetch();

?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Edition un Personel</title>
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
                <h1>Modification des données des Clients ou Personels</h1>
                 <p>precisez toutes vos donées</p>
            </div>
            <div class="card bg-primary text-white mt-4">
                <div class="card-head">Edition du Personel</div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <form method="POST" action="updatePersonel.php" class="form">
                        <div class="form_nom form-row">
                            <label for="id_personel_Domaine_competence">Votre identifinat : <?php echo $id_personel_Domaine_competence ?></label>
                            <input type="hidden" name="id_personel_Domaine_competence" class="form-control" id="id_personel_Domaine_competence" placeholder="Enter vote id_personel_Domaine_competence" value="<?php echo $id_personel_Domaine_competence ?>" >
                        </div><br>
                        <div class="form_nom form-row">
                            <div class="form-group col-md-6">
                                <label for="nom_personel">Entrez votre nom :</label>
                                <input type="text" name="nom_personel" class="form-control" id="nom_personel" placeholder="Nom" value="<?php echo $personel["nom_personel"] ?>">
                            </div>
                           <div class="form-group col-md-6">
                                <label for="prenom_personel">Entrez votre nom prenom :</label>
                                <input type="text" name="prenom_personel" class="form-control" id="prenom_personel" placeholder="Entrez votre prenom :" value="<?php echo $personel["prenom_personel"] ?>">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group  col-md-6">
                                <label for="tel_personel">Entrez votre numero de telephone :</label>
                                <input type="tel" name="tel_personel" class="form-control" id="tel_personel" placeholder="Entrez votre numero de telephone :" value="<?php echo $personel["tel_personel"] ?>">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="sexe">Entrez votre sexe :</label>
                                <input type="text" name="sexe" class="form-control" id="sexe" aria-describedby="emailHelp" placeholder="Entrez votre sexe(M/F)" value="<?php echo $personel["sexe"] ?>">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group form_nom1 col-md-6">
                                <label for="code_postale_personel">code postal</label>
                                <input type="text" name="code_postale_personel" class="form-control" id="code_postale_personel" placeholder="Entrez votre code postal :" value="<?php echo $personel["code_postale_personel"] ?>">
                            </div>
                            <div class="form-group form_nom1 col-md-6">
                                <label for="date_naissance_personel">Entrez votre date naissance :</label>
                                <input type="date" name="date_naissance_personel" class="form-control" id="date_naissance_personel" aria-describedby="emailHelp" placeholder="Enter vote date naissance" value="<?php echo $personel["date_naissance_personel"] ?>">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <label for="email_personel">Entrez votre email :</label>
                            <input type="email" name="email_personel" class="form-control" id="email_personel" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $personel["email_personel"] ?>">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div><br>
                        <div class="role" id="role">
                            <input type="radio" name="role" <?php if ($personel["role" ]== "admin") echo "checked" ?> value="admin" id="admin">
                            <label for="admin"><strong>ADMIN </strong></label><br>
                            <input type="radio" name="role" <?php if ($personel["role" ]== "visiteur") echo "checked" ?> value="visiteur" id="visiteur">
                            <label for="visiteur"><strong>VISITEUR</strong></label><br>
                            <input type="radio" name="role" <?php if ($personel["role" ]== "personel") echo "checked" ?> value="personel" id="personel">
                            <label for="personel"><strong>PERSONEL</strong></label>
                        </div><br>
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
                        </select>
                        </div>
                        <div id="validation_texte">
                            <p><button type="submit" class="btn btn-success mt-2"><span class="fa fa-save"    ></span>
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

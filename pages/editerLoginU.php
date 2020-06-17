<?php 
        error_reporting(-1);
        ini_set("display_errors", 1);
        require_once("identifier.php");  
        require_once("connexionBD.php");
        $id_personel =  isset($_GET['id_personel'])?$_GET['id_personel']:0;
        $requet=  "SELECT * FROM Personel WHERE role IN ('visiteur', 'admin') AND id_personel = $id_personel";
        $resultat = $conn->query($requet);
        $personel = $resultat->fetch();

?>
<!DOCTYPE html>
    <html>
    <head>
        <title>Edition Utilisateur</title>
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
                <h1>Modification des données d'un utilisateur</h1>
                 <p>precisez toutes vos donées</p>
            </div>
            <div class="card bg-primary text-white mt-4">
                <div class="card-head">Edition d'un Utilisateur</div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <form method="POST" action="updateLoginU.php" class="form">
                        <div class="form_nom form-row">
                            <label for="id_personel">Votre identifinat : <strong><?php echo $id_personel ?></strong></label>
                            <input type="hidden" name="id_personel" class="form-control" id="id_personel" placeholder="Enter vote id_personel" value="<?php echo $id_personel ?>" >
                        </div><br>
                        <div class="form-group">
                            <label for="sexe"><strong>Sexe</strong></label><br>
                            <div class="depression_oui" id="sexe">
                                <input type="radio" name="sexe" <?php if ($personel["sexe"]== "M") echo "checked" ?> value="M" id="sexe_M">
                                <label for="sexe"><strong>M </strong> (ou)</label>
                                <input type="radio" name="sexe" <?php if ($personel["sexe"]== "F") echo "checked" ?> value="F" id="sexe_F">
                                <label for="sexe"><strong>F </strong> </label>
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <label for="login">Login :</label>
                            <input type="text" name="login" class="form-control" id="login" placeholder="Login" value="<?php echo $personel["login"] ?>">
                        </div><br>
                        <div class="form_nom form-row">
                            <div class="form-group col-md-6">
                                <label for="nom_personel">Nom :</label>
                                <input type="text" name="nom_personel" class="form-control" id="nom_personel" placeholder="Nom" value="<?php echo $personel["nom_personel"] ?>">
                            </div>
                           <div class="form-group col-md-6">
                                <label for="prenom_personel">Prenom :</label>
                                <input type="text" name="prenom_personel" class="form-control" id="prenom_personel" placeholder="Entrez votre prenom :" value="<?php echo $personel["prenom_personel"] ?>">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group  col-md-6">
                                <label for="tel_personel">Numero de telephone :</label>
                                <input type="tel" name="tel_personel" class="form-control" id="tel_personel" placeholder="Entrez votre numero de telephone :" value="<?php echo $personel["tel_personel"] ?>">
                            </div>
                            <div class="form-group  col-md-6">
                                <label for="email_personel">Votre email :</label>
                                <input type="email" name="email_personel" class="form-control" id="email_personel" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $personel["email_personel"] ?>">
                            </div>
                        </div>
                        <div class="form_nom form-row">
                            <div class="form-group form_nom1 col-md-6">
                                <label for="code_postale_personel">Code postal</label>
                                <input type="text" name="code_postale_personel" class="form-control" id="code_postale_personel" placeholder="Entrez votre code postal :" value="<?php echo $personel["code_postale_personel"] ?>">
                            </div>
                            <div class="form-group form_nom1 col-md-6">
                                <label for="date_naissance_personel">Date naissance :</label>
                                <input type="date" name="date_naissance_personel" class="form-control" id="date_naissance_personel" aria-describedby="emailHelp" placeholder="Enter vote date naissance" value="<?php echo $personel["date_naissance_personel"] ?>">
                            </div>
                        </div>
                        <div id="validation_texte">
                            <p> 
                                <button type="submit" class="btn btn-success mt-2"><span class="fa fa-save"></span>
                                valider vos Informations
                                </button>
                                &nbsp; &nbsp;
                                <a href="modifierPwd.php?id_personel=<?php echo $id_personel ?>">Changer le mot de passe</a>
                            </p>
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

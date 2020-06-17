<?php 
        require_once("identifier.php");  
        require_once("connexionBD.php");
        $id_personel =  isset($_GET['id_personel'])?$_GET['id_personel']:0;
        $requet=  "SELECT * FROM Personel WHERE id_personel = $id_personel";

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
                    <form method="POST" action="updateUtilisateur.php" class="form">
                        <div class="form_nom form-row">
                            <label for="login">Login : <?php echo $personel["login"] ?></label>
                            <input type="hidden" name="login" class="form-control" id="login" placeholder="Login" value="<?php echo $personel["login"] ?>">
                        </div><br>
                        <div class="form_nom form-row">
                            <label for="nom_personel">Nom : <strong><?php echo $personel["nom_personel"]. " " .$personel["prenom_personel"] ?></strong></label>
                            <input type="hidden" name="nom_personel" class="form-control" id="nom_personel" placeholder="Login" value="<?php echo $personel["nom_personel"] ?>">
                        </div><br>
                        <div class="form_nom form-row">
                            <label for="id_personel">Votre identifinat : <?php echo $id_personel ?></label>
                            <input type="hidden" name="id_personel" class="form-control" id="id_personel" placeholder="Enter vote id_personel" value="<?php echo $id_personel ?>" >
                        </div><br>
                        <div class="role" id="role">
                            <input type="radio" name="role" <?php if ($personel["role" ]== "admin") echo "checked" ?> value="admin" id="admin">
                            <label for="admin"><strong>ADMIN </strong></label><br>
                            <input type="radio" name="role" <?php if ($personel["role" ]== "visiteur") echo "checked" ?> value="visiteur" id="visiteur">
                            <label for="visiteur"><strong>VISITEUR</strong></label><br>
                            <input type="radio" name="role" <?php if ($personel["role" ]== "personel") echo "checked" ?> value="personel" id="personel">
                            <label for="personel"><strong>PERSONEL</strong></label>
                        </div><br>
                        <div id="validation_texte">
                            <p>
                                <button type="submit" class="btn btn-success mt-2"><span class="fa fa-save"></span>
                                valider vos Informations
                                </button>
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

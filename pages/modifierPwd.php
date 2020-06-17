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
        <title>Password</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" media="screen" type="text/css"  href="../public/css/formulaire.css"/> 
    </head>
    <body>
        <?php
            include("../public/menu.php");
        ?>
        <div class="container contenu">
            <h1 class="text-center text-info display-5">Changement de mot de passe</h1>
            <h2 class="text-center text-info">Compte : <?php echo $_SESSION['user']['login'] ?></h2>
            <br>
            <form class="form-horizontal" method="POST" action="upadtePwd.php">
                <div class="form_nom col-lg-4 mx-auto">
                    <input type="password" name="oldpwd" autocomplete="false" class="form-control oldpwd" id="oldpwd" placeholder="Enter vote mot de passe actuelle" minlength="4" required><i class="fa fa-eye fa-2x show-old-pass clickable" ></i>
                </div><br>
                <div class="form_nom col-lg-4 mx-auto">
                    <input type="password" name="newpwd" class="form-control newpwd" id="newpwd" placeholder="Entrer le nouveau mot de passe" ><i class="fa fa-eye fa-2x show-new-pwd" aria-hidden="true"></i>
                </div>
                <div class="form_nom ">
                    <p>
                        <button type="submit" class="btn btn-success mt-2">
                            <span class="fa fa-save"></span>
                            valider vos Informations
                        </button>
                    </p>
                </div> 
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../public/js/pwd.js"></script>
        <!--<script type="text/javascript" src="./public/js/indexE.js"></script>-->
    </body>
</html>

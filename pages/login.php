<?php 
    error_reporting(-1);
    ini_set("display_errors", 1);
    
    session_start(); 
    if(isset($_SESSION['erreurLogin'])){
        $erreurLogin = $_SESSION['erreurLogin'];
    }else{
        $erreurLogin = "";
    }
    session_destroy();
?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Se connecter</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" media="screen" type="text/css"  href="./public/css/formulaire.css"/> 
    </head>
    <body>
      
        <div class="container col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 ">
            <div class="card bg-primary text-white mt-4">
                <div class="card-head">Se connecter :</div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <form method="POST" action="seConnecter.php" class="form">
                        <div class="alert alert-danger">
                            <?php echo $erreurLogin  ?> 
                        </div>
                        <div class="form_nom ">
                            <label for="login">Login :</label>
                            <input type="text" name="login" class="form-control" id="login" placeholder="Login">
                        </div>   
                        <div class="form-group">
                            <label for="pwd">Mot de passe :</label>
                            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="pwd :">
                        </div>
                        <div id="validation_texte">
                            <button type="submit" name="envoi" class="btn btn-success mb-4"><i class="fa fa-sign-in"></i>
                                Se connecter</button><br>
                            <a class="pl-3" href="initialiserPwd.php">Mot de passe Oublié</a>
                            <a class="pl-3"  href="ajouterUtilisateurs.php">Creer un nouveau compte</a>
                        </div>              
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./public/js/index.js"></script>
        <!-- <script type="text/javascript" src="./public/js/indexE.js"></script>-->
    </body>
</html>

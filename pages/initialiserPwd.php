
<?php 
    require_once('connexionBD.php');
    require_once('../les_fonctions/fonctions.php');

    if(isset($_POST["email_personel"])){
        $email_personel = $_POST["email_personel"];
    }else{
        $email_personel = "";
    }

    $user = rechercher_user_par_email("numirix.yannick@gmail.com");

    if($user!=null){
        echo $user['login'];
        $id = $user['id_personel'];
        $requete = $conn->prepare("UPDATE Personel SET pwd=MD5('0000') WHERE id_personel=$id");
        $requete->execute();

        $to = $email_personel;
        $objet = "Initialisation de mot de passe";
        $content = "Votre nouveau mot e passe est 0000,Veuillez le modifier a la prochaine ouverture de session";
        $entes = "From : App formulaire d'inscription. '/n' .'CC: numirix.yannick@gmail.com'";
        mail($to,$objet,$content,$entes);
        echo 'Ok';

    }else{
        echo 'Email incorect';
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Initialisation</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="s²tylesheet" media="screen" type="text/css"  href="./public/css/formulaire.css"/> 
    </head>
    <body>
        <div class="container mt-3">
            <div class="card form-group col-md-10 mx-auto bg-dark">
                <h5 class="card-header bg-success">Initialisation du mot de passe</h5>
                <div class="card-body">
                    <form method="POST" class="form">
                        <div class="form-group">
                        <label class="text-light" for="email_personel">Email de recuperation :</label>
                        <input type="email" 
                           name="email_personel" 
                           class="form-control" 
                           id="email" 
                           placeholder="Taper votre email de recuperation" 
                           required
                           autocomplete="off">
                    </div>
                    <div id="validation_texte">
                        <p>
                            <button type="submit" name="envoi" class="btn btn-success mt-2">
                                    <span class="fa fa-save"></span>
                                valider vos Informations
                            </button>
                        </p>
                    </div>  
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>
<?php 
    error_reporting(-1);
    ini_set("display_errors", 1);

    session_start();
    require_once("connexionBD.php");
    $login = isset($_POST['login'])?$_POST['login']:'';
    $pwd = isset($_POST['pwd'])?$_POST['pwd']:'';

    $requeteP = "SELECT id_personel,login,role,etat,email_personel,nom_personel,prenom_personel,tel_personel,code_postale_personel,sexe,date_naissance_personel FROM Personel WHERE login= '$login' AND pwd= '$pwd'";
    $resultatP = $conn->query($requeteP);

    if ($user=$resultatP->fetch()) {
        if($user['etat']==1){
            $_SESSION['user']=$user;
            header("location:../indexClient.php");
        }else{
            $_SESSION['erreurLogin']="<strong> Erreur!!</strong> Votre compte est desactivé.<br> Veuillez contacter l'administrateur";
            header("location:login.php");
        }
    }else{
        $_SESSION['erreurLogin']="<strong> Erreur!!</strong> Mot de passe ou Login incorrecte !!!";
        header("location:login.php");
    }

?>
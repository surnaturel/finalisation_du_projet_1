<?php 
 	error_reporting(-1);
    ini_set("display_errors", 1);
	require_once("identifier.php");  
    require_once("connexionBD.php");

    $id_personel = $_SESSION['user']['id_personel'];
    $oldpwd = isset($_POST['oldpwd'])?$_POST['oldpwd']:"";
    $newpwd = isset($_POST['newpwd'])?$_POST['newpwd']:"";

    $msg = "";
    $interval =3;
    $url ="login.php";
    $requete = "SELECT * FROM Personel WHERE id_personel=$id_personel AND pwd='$oldpwd'";
    $resulatat = $conn->prepare($requete);
    $resulatat->execute();

    if($resulatat->fetch()){
    	$requete="UPDATE Personel SET pwd=? WHERE id_personel=?";
    	$params = array($newpwd,$id_personel);
    	$resulatat=$conn->prepare($requete);
    	$resulatat->execute($params);
    	$msg = "<div class='alert alert-success text-center display-4 mt-5' role='alert'><strong>Felicitation!</strong> votre mot de passe est correcte !!!</div>
    			";// revoir pourquoi la classe ne passe pas ici 
    }else{
    	$msg = "<div class='alert alert-danger text-center display-4 mt-5' role='alert'><strong>Erreur!</strong> L'ancien mot de passe est incorrect !!!</div>";
    	$url = $_SERVER['HTTP_REFERER'];
    	
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edition d'un Client</title>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<br><br>
		<?php 
			echo $msg;
			header("refresh:$interval;url=".$url); // revenir a la page precedente apres 3s
		?>
	</div>
    
</body>
</html>
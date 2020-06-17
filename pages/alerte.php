
<?php
	require_once("identifier.php");
	$message = isset($_GET['message'])?$_GET['message']:"Erreu";
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Client</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="sàtylesheet" media="screen" type="text/css"  href="./public/css/formulaire.css"/> 
	</head>
	<style type="text/css">
		.margintop1{
			margin-top: 10px;
		}
		.margintop{
			margin-top: 30px;
		}
	</style>
	<body>
		<?php
			include("public/menu.php");
		?>
		
		<div class="container margintop1">
			<div class="card bg-success text-white">
				<div class="card-header"><h4>Erreu :</h4></div>
			</div>
			<div class="card bg-light text-dark">
				<div class="card-body">
					<h3><?php echo $message ?></h3>
					<h4><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"> Retour >>></a></h4><!-- recuperer la page precedente -->
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       <!-- <script type="text/javascript" src="modifierClient.js"></script> -->
	</body>
</html>


<?php
	error_reporting(-1);
	ini_set("display_errors", 1);

    require_once("identifier.php"); 
	require_once("connexionBD.php");

	
	$login = isset($_GET['login'])?$_GET['login']:"";

	$size =  isset($_GET['size'])?$_GET['size']:3;
	$page =  isset($_GET['page'])?$_GET['page']:1;
	$offset = ($page-1)*$size;

	
	$requeteUser = "SELECT * FROM Personel WHERE role IN ('visiteur', 'admin') AND login LIKE '%$login%' LIMIT $size offset $offset";
	$requeteCount = "SELECT count(*) countU FROM Personel WHERE role IN ('visiteur', 'admin') AND  login LIKE '%$login%'";

	$resultatuser=$conn->query($requeteUser);
	$resultatcount = $conn->query($requeteCount); // on execute la requette 

	$tabCount = $resultatcount->fetch(); // on le met sous forme de table
	$nbUser= $tabCount['countU']; // c'est une seul ligne donc la valeur de $tabCount['countF'] est le nombre de ligne compter

	$reste = $nbUser%$size;
	if($reste ===0){  // $nbPersonel est un multiple de $size
		$nbpage= $nbUser/$size;
	}else{
		$nbpage=floor($nbUser/$size) +1;
	}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Gestionaire D'utilisateur</title>
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
			include("../public/menu.php");
		?>
		
		<div class="container margintop1">
			<div class="card bg-success text-white">
				<div class="card-header">recherche des utilisateurs...</div>
			</div>
			<div class="card bg-light text-dark">
				<div class="card-body">
					<form method="GET" action="utilisateurs.php" class="form-inline">
						<div class="from-group">
							<input type="text" name="login" value="<?php echo $login?>" placeholder="Nom du Personel">
						</div>&nbsp &nbsp
						<button type="submit" class="btn btn-success"><span class="fa fa-search"></span> rechercher le Personel....</button>
						
					</form>
				</div>
			</div>

			<div class="card bg-primary text-white margintop">
				<div class="card-header">liste des utilisateurs : (<?php echo $nbUser ?>)</div>
			</div>
			<div class="card bg-light text-dark">
				<div class="card-body">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Login</th><th>Email</th><th>Role<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php while($utilisateur = $resultatuser->fetch()) { ?>
								<tr class="<?php echo $utilisateur['etat']==1?"bg-success":"bg-danger"?>">
									<td><?php echo $utilisateur['login']?></td>
									<td><?php echo $utilisateur['email_personel']?></td>
									<td><?php echo $utilisateur['role']?></td>
									<td class="bg-light">
										<a href="editerUtilisateur.php?id_personel=<?php echo $utilisateur['id_personel']?>&login=<?php echo $utilisateur['login']?>" id="editerUtilisateur ">
											<i class='fas fa-pencil-alt'></i>
										</a>
											&nbsp
										<a onclick="return confirm('Etes vous sur de vouloir supprimer les utilisateurs ?')"href="supprimerUtilisateur.php?id_personel=<?php echo $utilisateur['id_personel']?>&login=<?php echo $utilisateur['login']?>" id="supprimerUtilisateur">
											<i class='far fa-trash-alt '></i>
										</a>
										&nbsp
										<a href="activerUtilisateur.php?id_personel=<?php echo $utilisateur['id_personel']?>&login=<?php echo $utilisateur['login']?>&etat=<?php echo $utilisateur['etat']?>" id="activerUtilisateur">
											<?php 
												if($utilisateur['etat']==1)
													echo "<i class='fas fa-check'></i>";
												else
													echo "<i class='fas fa-times'></i>";
											?>
										</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<div>
						<ul class="pagination pagination-md">
							<?php for($i=1; $i<= $nbpage; $i++){ ?>
								<li class="page-item <?php if($i==$page) echo 'active' ?> "> 
									<a class="page-link" href="utilisateurs.php?page=<?php echo $i; ?>&login">
									 	<?php echo $i; ?>	
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       <!-- <script type="text/javascript" src="modifierClient.js"></script> -->
	</body>
</html>

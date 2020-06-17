
<?php
	require_once("connexionBD.php");

	$size =  isset($_GET['size'])?$_GET['size']:6;
	$page =  isset($_GET['page'])?$_GET['page']:1;
	$offset = ($page-1)*$size;


	$nomclient1 = isset($_GET['nomClient'])?$_GET['nomClient']:"";
	$decision = isset($_GET['decision'])?$_GET['decision']:"all";

	
	if($decision=='all'){
		$requete = "select * from Client where nom_client like '%$nomclient1%' limit $size offset $offset";
		$requeteCount = "select count(*) countF from Client where nom_client like '%$nomclient1%' ";
	}else{
		$requete = "select * from Client where nom_client like '%$nomclient1%' and decision='$decision' limit $size";
		$requeteCount = "select count(*) countF from Client where nom_client like '%$nomclient1%' and decision='$decision'";
	}
	$resultatF=$conn->query($requete);
	$resultatcount = $conn->query($requeteCount); // on execute la requette 
	$tabCount = $resultatcount->fetch(); // on le met sous forme de table
	$nbPersonel= $tabCount['countF']; // c'est une seul ligne donc la valeur de $tabCount['countF'] est le nombre de ligne compter
	$reste = $nbPersonel%$size;
	if($reste ===0){  // $nbPersonel est un multiple de $size
		$nbpage= $nbPersonel/$size;
	}else{
		$nbpage=floor($nbPersonel/$size) +1;
	}
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
				<div class="card-header">recherche des Nom et Prenom...</div>
			</div>
			<div class="card bg-light text-dark">
				<div class="card-body">
					<form method="GET" action="pageblanche.php" class="form-inline">
						<div class="from-group">
							<input type="text" name="nomPrenom" placeholder="Nom et Prenom" class="form-control" value="<?php echo $nomPrenom?>">
						</div>
						<label for="domaine_competence">Domaine :</label>
						<select name="domaine_competence" class="form-control" id="domaine_competence" onchange="this.form.submit()">
							
						</select>
						<button type="submit" class="btn btn-success"><span class="fa fa-search"></span> rechercher des clients....</button>
						&nbsp &nbsp
						<a href="ajouterPersonel.php"><span class="fa fa-pencil"> Ajouter Personel</a>
					</form>
				</div>
			</div>

			<div class="card bg-primary text-white margintop">
				<div class="card-header">liste du Personel : (<?php echo $nbPersonel?>)</div>
			</div>
			<div class="card bg-light text-dark">
				<div class="card-body">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Id Personel</th><th>Nom Personel</th><th>Prenom Personel</th><th>Sexe</th><th>Domaine competence</th><th>Role</th><th>Photo</th><th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php while($personel = $resultatF->fetch()) { ?>
								<tr>
									<td><?php echo $personel['id_personel_Domaine_competence']?></td>
									<td><?php echo $personel['nom_personel']?></td>
									<td><?php echo $personel['prenom_personel']?></td>
									<td><?php echo $personel['sexe']?></td>
									<td><?php echo $personel['domaine_competence']?></td>
									<td><?php echo $personel['role']?></td>
									<td></td>
									<td>
										<a href="editerPersonel.php?id_personel_Domaine_competence=<?php echo $personel['id_personel_Domaine_competence']?>">
											<i class='fas fa-pencil-alt'></i>
										</a>
											&nbsp
										<a onclick="return confirm('Etes vous sur de vouloir supprimer le Personel ?')"href="supprimerPersonel.php?id_personel_Domaine_competence=<?php echo $personel['id_personel_Domaine_competence']?>" id="modifierPersonel">
											<i class='far fa-trash-alt'></i>
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
									<a class="page-link" href="client.php?page=<?php echo $i; ?>&nomclient1=<?php echo $nomclient1?>&decision=<?php echo $decision?>">
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

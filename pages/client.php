
<?php
	error_reporting(-1);
	ini_set("display_errors", 1);
	require_once("identifier.php");
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
	$nbClient= $tabCount['countF']; // c'est une seul ligne donc la valeur de $tabCount['countF'] est le nombre de ligne compter
	$reste = $nbClient%$size;
	if($reste ===0){  // $nbClient est un multiple de $size
		$nbpage= $nbClient/$size;
	}else{
		$nbpage=floor($nbClient/$size) +1;
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
			include("../public/menu.php");
		?>
		
		<div class="container margintop1">
			<div class="card bg-warning text-white">
				<div class="card-header">recherche des patients...</div>
			</div>
			<div class="card bg-light text-dark">
				<div class="card-body">
					<form method="GET" action="client.php" class="form-inline">
						<div class="from-group">
							<input type="text" name="nomClient" placeholder="Nom du client">
						</div>&nbsp; &nbsp;
						<label for="decision">Decision :</label>
						<select name="decision" class="form-control" id="decision" onchange="this.form.submit()">
							<option value="all" <?php if($decision==='all') echo 'selected' ?> >Tous les clients</option>
							<option value="0"   <?php if($decision==='0')   echo 'selected' ?> >Client en attente</option>
							<option value="1"   <?php if($decision==='1')   echo 'selected' ?> >Client refusé</option>
							<option value="2"   <?php if($decision==='2')   echo 'selected' ?> >Client accpeté</option>
						</select>
						<button type="submit" class="btn btn-success"><span class="fa fa-search"></span> rechercher des clients....</button>
						&nbsp; &nbsp;
						<a href="ajouterClient.php">
							<span class="fa fa-pencil"> 
								Ajouter un Client
							</a>
					</form>
				</div>
			</div>

			<div class="card bg-primary text-white margintop">
				<div class="card-header">liste des clients : (<?php echo $nbClient?>)</div>
			</div>
			<div class="card bg-light text-dark">
				<div class="card-body">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Id client</th><th>nom client</th><th>Prenom client</th><th>Date de début de grossesse</th><th>Date accouchement prévue</th><?php if($_SESSION['user']['role']=='admin'){?><th>Action</th><?php } ?>
							</tr>
						</thead>
						<tbody>
							<?php while($client = $resultatF->fetch()) { ?>
								<tr>
									<td><?php echo $client['id_client']?></td>
									<td><?php echo $client['nom_client']?></td>
									<td><?php echo $client['prenom_client']?></td>
									<td><?php echo $client['date_debut_grossesse']?></td>
									<td><?php echo $client['date_accouchement_prevue']?></td>
									<?php if($_SESSION['user']['role']=='admin'){?>
										<td>
											<a href="editerClient.php?id_client=<?php echo $client['id_client']?>">
												<i class='fas fa-pencil-alt'></i>
											</a>
												&nbsp
											<a onclick="return confirm('Etes vous sur de vouloir supprimer le Client ?')"href="supprimerClient.php?id_client=<?php echo $client['id_client']?>" id="modifierClient">
												<i class='far fa-trash-alt'></i>
											</a>

										</td>
									<?php } ?>
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

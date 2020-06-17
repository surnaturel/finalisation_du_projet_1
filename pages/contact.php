<!DOCTYPE html>
	<html>
	<head>
		<title>Inscription client</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" media="screen" type="text/css"  href="../public/css/formulaire.css"/> 

	</head>
	<body>
		<div id="contenair">
			<div id="menu">
				<?php
					include("../public/menu.php");
				?>
			</div>
			<div id="demande_formulaire">
				<div class="contenair" id="information">
					<div id="en-tete">
						<h3>Formulaire de demande d’inscription en vue d’un accouchement</h3>
						<p>A imprimer et à compléter</p>
					</div>
					<section id="information_importante">
						<p class="titre-section1"><strong>Informations importantes</strong></p>
						<p>Les demandes d’inscription ont lieu <strong>5 mois avant la date prévue de l’accouchement</strong></p>						
						<p>Les demandes d’inscription doivent parvenir au Centre Hospitalier Sud Francilien <strong> à partir du premier
							lundi du mois, pour une période de deux semaines.</strong> Toute demande reçue après la période de
							deux semaines ne sera pas traitée.</p>							
						<p>Ce formulaire dûment complété devra être retourné au Centre Hospitalier Sud Francilien sous
							enveloppe avec :
							<ul>
								<li><strong>une photocopie du compte rendu de l’échographie de datation</strong></li>
								<li><strong>une photocopie de votre pièce d’identité</strong></li>
								<li><strong>une photocopie de justificatif de domicile</strong></li>
							</ul>
						</p>
						<p class="titre-section">Seuls les dossiers complets seront pris en compte</p>
						<p>Vous pouvez nous retourner le dossier en le déposant dans une boîte aux lettres du bureau des
							rendez-vous de gynécologie-obstétrique situé au<span class="titre-section"> rez-de-chaussée du <strong>Pôle A.</strong></span></p>
						<p><strong>Nos places sont limitées à la demande de l’agence régionale de santé afin que nos équipes
							obstétricales puissent assurer une prise en charge optimale et sécurisée, notamment pour les
							femmes dont l’état de grossesse impose un suivi et un accouchement dans une maternité de
							type 3.
						</strong></p>
						<br>
						<p>Vous serez informée de l’acceptation ou du refus de votre demande le mois suivant.
							En cas d’acceptation, nous vous contacterons pour vous donner votre premier rendez-vous avec les
							équipes du Centre Hospitalier Sud Francilien.
							Pour toutes questions relatives à l’inscription merci d’adresser un mail a 
						</p><span></span>
						<a href="#">Inscriptio.maternite@chsf.fr</a>
					</section>
				</div>
				<div id="formulaire">

				</div>
			</div>
			<div id="footer">
				<?php
					include("public/footer.php");
				?>			
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./public/js/index.js"></script>
	</body>
</html>

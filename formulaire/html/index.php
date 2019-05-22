<?php
session_start();
$fonction = null;
?>
<!doctype htmL>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content=""><head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<link href="../css/formulaire1.css" rel="stylesheet">   
	</head>

	<body>
		<!--<header>		
		 <nav>   
			<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="ajouter1.php">Ajouter une enquête</a>
			<a href="generertestauto.php">Générer une template</a>
			</div>
			<div id="main">
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Choisir un formulaire</span>
			</div>
			<script>
				function openNav() {
					document.getElementById("mySidenav").style.width = "250px";
					document.getElementById("main").style.marginLeft = "250px";
					document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
				}

				function closeNav() {
					document.getElementById("mySidenav").style.width = "0";
					document.getElementById("main").style.marginLeft= "0";
					document.body.style.backgroundColor = "#f5f5f5";
				}
			</script>
		</nav>	 -->	
		<link href="../css/formulaire.css" rel="stylesheet">
		</head> 

	<body class="text-center">
		<form class="form-in" action="ajouter2.php" method="POST" enctype="multipart/form-data">
		  <h2>Ajouter une enquête</h2>
		  <label id="nomEntreprise" class="sr-only">Nom de l'entreprise</label>
		  <input type="text" name="nomEntreprise" class="form-control" placeholder="Nom de l'entreprise" autofocus>
		  <label id="codePostal" class="sr-only">Code postal</label>
		  <input type="text" name="codePostal" class="form-control" placeholder="Code postal">
		  <label id="ville" class="sr-only">Ville</label>
		  <input type="text" name="ville" class="form-control" placeholder="Ville">
		  <br>
		  <label id="logo" class="sr-only">Logo</label>
		  <input type="file"  id="blah" name="photo" class="form-control" enctype='multipart/form-data'>
		  <!--
		  <input type='file' name="photo" class="form-control" enctype="multipart/form-data" onchange="readURL(this);" />  -->
		  <br><br>
		  <label id="dateDebut" class="sr-only">Date de début de l'enquete</label>
		  <h3> Date de debut de l'enquete :</h3>
		  <input type="date" name="dateDebut" class="form-control" placeholder="Date de début de l'enquete">
		  <h3> Date de fin de l'enquete :</h3>
		  <label id="dateFin" class="sr-only">Date de fin de l'enquete</label>
		  <input type="date" name="dateFin" class="form-control" placeholder="Date de fin de l'enquete">
		  <br>
		  <label id="signature" class="sr-only">Signature</label>
		  <input type="text" name="signature" class="form-control" placeholder="Signature">
		  <br><br>
		  <button class="boutonSubmit" type="submit">Suivant</button>
		  <br><br>
		</form>
	</body>
</html>





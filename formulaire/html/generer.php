<?php
session_start();
include ("libForm.php");
?>
<!doctype html>
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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="../css/formulaire1.css" rel="stylesheet">   
	</head>

	<body>
		<header>		
			 <nav>   
				<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="ajouter1.php">Ajouter une enquête</a>
				<a href="generer.php">Générer une template</a>
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
			</nav>		
			<link href="../css/formulaire.css" rel="stylesheet">
		</head>  

	<body class="text-center">
		 <form class="form-in" action="extraction.php" method="POST">
			<h2>Générer une template</h2>
			<center>
				<div class="custom-select" style="width:200px;">
				  <select>
					<option value="1">Body Minute</option>
					<option value="2">Carrefour</option>
					<option value="3">Courte Paille</option>
					<option value="4">Primark</option>
					<option value="5">Burger King</option>
					<option value="6">Häagen-Dazs</option>
					<option value="7">Mc Donald's</option>
					<option value="8">Electrodépôt</option>
				  </select>
				</div>
			</center>
			<br><br>
			<label for="dateDebut" class="sr-only">Date de début de l'enquete</label>
			<input type="date" id="dateDebut" class="form-control" placeholder="Date de début de l'enquete">
			<label for="dateFin" class="sr-only">Date de fin de l'enquete</label>
			<input type="date" id="dateFin" class="form-control" placeholder="Date de fin de l'enquete">
			<br><br>
			<button class="boutonSubmit" type="submit">Générer</button>
			<br><br>
			<center>
				<a class="nav-link" href="ajouter1.php">Créer une enquête</a>
			</center>
		</form>
	</body>
	<script src="../js/formulaire.js"></script>
</html>
	

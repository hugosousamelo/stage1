<?php
session_start();
include "libForm.php";
$_SESSION['nomEntreprise'] = $_POST['nomEntreprise'];
$_SESSION['codePostal'] = $_POST['codePostal'];
$_SESSION['ville'] = $_POST['ville'];
$_SESSION['dateDebut'] = $_POST['dateDebut'];
$_SESSION['dateFin'] = $_POST['dateFin'];
$_SESSION['signature'] = $_POST['signature'];

if ($_FILES['photo'] != null){

	$_SESSION['fileNom'] = $_FILES['photo']['name'];
	$_SESSION['fileType'] = $_FILES['photo']['type'];
	$_SESSION['file'] = $_FILES['photo']['size'];

	$_SESSION['fread'] = fread(fopen($_FILES['photo']['tmp_name'], "r"),$_FILES['photo']['size']);
	$_SESSION['encodage'] =  base64_encode(file_get_contents($_FILES['photo']['tmp_name']));

	$_SESSION['imageType'] = $_FILES['photo']['type'];
}
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
		</nav>--> 
		<link href="../css/formulaire.css" rel="stylesheet">
	</head> 

	<body class="text-center">
		<form class="form-in" action="intermediaire2.php" method="POST">
		  <h2>Ajouter une enquête</h2>
		  <label id="nbPersonne" class="sr-only">Nombre de personne de l'enquete</label>
		  <input type="number" name="nbPersonne" class="form-control" placeholder="Nombre de participant a l'enquête" autofocus>
		  <br>
		  <label id="nbContent" class="sr-only">Nombre de personne contente</label>
		  <input type="number" name="nbContent" class="form-control" placeholder="Nombre de personne contente">
		  <label id="nbIndecis" class="sr-only">Nombre de perosnne indécis</label>
		  <input type="number" name="nbIndecis" class="form-control" placeholder="Nombre de perosnne indécis">
		  <label id="nbMecontent" class="sr-only">Nombre de personne mécontente</label>
		  <input type="number" name="nbMecontent" class="form-control" placeholder="Nombre de personne mécontente">
		  <br>
		  <label id="nbPromoteur" class="sr-only">Nombre de promoteur</label>
		  <input type="number" name="nbPromoteur" class="form-control" placeholder="Nombre de promoteur">
		  <label id="nbDetracteur" class="sr-only">Nombre de detracteur</label>
		  <input type="number" name="nbDetracteur" class="form-control" placeholder="Nombre de detracteur">
		  <label id="nbPassif" class="sr-only">Nombre de passif</label>
		  <input type="number" name="nbPassif" class="form-control" placeholder="Nombre de passif">
		  <br>
		  <textarea class="form-control" name="commentaire" id="commentaire" rows="5" cols="38" placeholder="Zone de commentaire :"></textarea>
		  <br><br>
		  <button class="boutonSubmit" type="submit">Envoyer</button>
		  <br><br>
		</form>
	</body>
</html>

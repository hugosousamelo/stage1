<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Consconte</title>
		<link rel="stylesheet" type="Text/css" href="template.css">
		<link href="https://fonts.googleapis.com/css?family=Metrophobic" rel="stylesheet">
		<script src="../../../js/Chart.bundle.js"></script>
		<script src="../../../js/utils.js"></script>
		<style>
			canvas {
				-moz-user-select: none;
				-webkit-user-select: none;
				-ms-user-select: none;
			}
		</style>
	</head>
	<body class="page">
	<?php echo "<img class=\"logoClient\" src=\"data:".$_SESSION['imageType'].";base64,".$_SESSION['encodage']."\">";?>
	<article class="titreClient">
		<?php
			echo "<font size=\"7\">".strtoupper($_SESSION['nomEntreprise'])." //</font>
			<font size=\"7\">".strtoupper($_SESSION['ville'])." ".strtoupper($_SESSION['codePostal'])."</font>";
		?>
			</article>

			<div class="barre"></div>
			
			<br>

			<div class="zoneB"></div>

			<section class="zoneImage">
				<article class="zoneImage">
					<h1>ABC</h1>
					<?php
					//$pourcentageContent = $_SESSION['pourcentageContent'];
					//$poucentIndecis = $_SESSION['poucentIndecis'];
					//$poucentMecontent = $_SESSION['poucentMecontent'];
					//echo "<center><img src='graph.php?pourcentageContent=$pourcentageContent&poucentIndecis=$poucentIndecis&poucentMecontent=$poucentMecontent' class=\"graph\"><center>";
					  ?>
					<center>
						<h2>
						<a class="vert">■ Nos promoteurs </a>
						<a class="jaune">■ Nos passifs </a>
						<a class="rouge">■ Nos détracteurs</a>
						</h2>
					</center>
				</article>
			</section>

			<?php echo "<div class=\"zoneA\"><br><br><br>&nbsp;&nbsp;&nbsp;NOS CLIENTES RÉPONDANTS<br>&nbsp;&nbsp;&nbsp;DU ".$_SESSION['dateDebut']." au ".$_SESSION['dateFin']."</div>";?>

			<?php echo "<div class=\"pourcentage\"><font style=\"font-weight:bold;\">".$_SESSION['pourcentageContent']."%</font></div>";?>
			<div class="zoneC"><i>TAUX DE SATISFACTION</i></div>
			

		

			

			<div class="zoneD"></div>

			<section class="tableau">
				<table class="tableau" border="1">
					<tr>
						<td class="tableau"><font size="5">Date de l'étude</font></td>
						<td class="tableau"><font size="5">Total global de client répondants</font></td>
						<td class="tableau"><font size="5">Total de clients contents</font></td>
						<td class="tableau"><font size="5">Total de clients indécis</font></td>
						<td class="tableau"><font size="5">Total de clients mécontents</font></td>
					</tr>
						
					<tr>
						<?php
						echo "<td class=\"tableau\"><font size=\"5\">".$_SESSION['dateDebut']." au ".$_SESSION['dateFin']."</font></td>";
						echo "<td class=\"tableau\"><font size=\"5\">".$_SESSION['nbPersonne']."</font></td>";
						echo "<td class=\"tableau\"><font size=\"5\">".$_SESSION['pourcentageContent']."%</font></td>";
						echo "<td class=\"tableau\"><font size=\"5\">".$_SESSION['poucentIndecis']."%</font></td>";
						echo "<td class=\"tableau\"><font size=\"5\">".$_SESSION['poucentMecontent']."%</font></td>";
						?>
					</tr>
				</table>
			</section>

			<div class="zoneE"><center></center></div>


			<article class="commentaire">
				<div class="fondCom">
					
					<center><font class="merci" size="6" style="font-weight:bold;">Merci à nos clients qui nous font confiance et qui sont satisfaits de nos services.</font></center>

					<br>

					<center>
						<font class="zoneCom">
							<?php 
								if ($_SESSION['pourcentageContent'] >= 61 && $_SESSION['pourcentageContent'] <= 79){
									echo " <h4>Notre objectif est maintenir relation de proximité que nous avons avec nos clients nous permet de mieux comprendre les causes d’insatisfaction.</h4>
											<br><br>
											<center><font class=\"merci\" size=\"6\" style=\"font-weight:bold;\">Bravo et merci à toutes les équipes.</font></center>";
								}
								else if ($_SESSION['pourcentageContent'] >= 80 && $_SESSION['pourcentageContent'] <= 89){
									echo "<h4>Notre ambition est de maintenir ce niveau avec un objectif  de nous améliorer chaque jour.
											La relation de proximité que nous avons construite avec nos clients , permet de mieux comprendre les causes d’insatisfaction et d’agir en conséquence.</h4>
											<center><font class=\"merci\" size=\"6\" style=\"font-weight:bold;\">Bravo et merci à toutes les équipes.</font></center>";
								}
								else if ($_SESSION['pourcentageContent'] >= 90 && $_SESSION['pourcentageContent'] <= 100){
									echo "<h4>Vous êtes ".$_SESSION['nbContent']." qui trouvent nos services , excellents. Vous êtes prêts à nous recommander. 1000 mercis.
											Nous sommes fières des avis positifs. Nous maintenons ce niveau d’excellence pour encore mieux vous services.
											Notre ambition est de créer des relations de proximité de qualité avec nos clients.</h4>
											<center><font class=\"merci\" size=\"6\" style=\"font-weight:bold;\">Bravo et merci à toutes les équipes.</font></center>";
								}
								else{
									echo "MAUVAIS !!!";
								}
								
							
								echo "<br><br><font class=\"zoneBleu\" size=\"2\"><i>".$_SESSION['signature']."</i></font>";
							?>
						</font>
					</center>
				</div>
			</article>

			<img class="logoCC" src= "image/logoCC.png">
			<article class="titreCC">
				
				<font>CONSOMMATEURS-CONTENTS SOCIÉTÉ CONSCONTE</font>
				<br>
				<font>CONTACT : 06 52 23 38 89</font>
				<br>
				<font>INFO@CONSOMMATEURS-CONTENTS.COM</font>
				<br>
				<font>www.consommateurs-contents.com</font>

			</article>

	<!--<a class="block1" href="../template_support_de_communication/template.php"><</a>-->
	</body>
<html>


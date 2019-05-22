<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Consconte</title>
		<link rel="stylesheet" type="Text/css" href="template2.css">
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
	<body>
	<header>
		<section>
			<article class="entete">
				<p>
				<?php
				echo "<font size=\"7\" style=\"font-weight:bold;\">".$_SESSION['pourcentageContent']."</font><font size=\"5\" style=\"font-weight:bold;\">%</font>";
				?>
				</p>
			</article>
			<article class="entete2">
				<p>
				<font size="7" style="font-weight:bold;">Taux de satisfaction</font>
				</p>
			</article>
		</section>
	</header>
	<section>
		<a>
			<article class="graph">
				<p class="fondL">
				<?php
					echo "<br><br>
					<font style=\"font-weight:bold;\">Les clients répondants du ".$_SESSION['dateDebut']." au ".$_SESSION['dateFin']." :</font>";
				?>
				<br><br>
				<div id="canvas-holder" style="width:100%" class="graph">
					<canvas id="chart-area"></canvas>
				</div><?php
					if ($_SESSION['pourcentageContent'] >= 80){
					echo "<center><img src=\"image/happy-256px-150x150.png\" alt=\"Icon consconte\" class=\"icon\"></center>";
					}
					else if ($_SESSION['pourcentageContent'] < 80 && $_SESSION['pourcentageContent'] >=60 ){
					echo "<center><img src=\"image/thinking.png\" alt=\"Icon consconte\" class=\"icon\"></center>";
					}
					else{
					echo "<center><img src=\"image/angry-couronne-256px-150x150.png\" alt=\"Icon consconte\" class=\"icon\"></center>";
					}
					?>
				<br><br><br><br>
				<center><font class="legende" size="5"><a class="vert">♛ </a>Nos promoteurs  <a class="jaune">♛ </a>Nos passifs  <a class="rouge">♛ </a>Nos détracteurs</font></center>
			</article>
		</a>		
	</section>

	<section>
		<article class="nps">	
			<section>
				<article class="score">
					<p class="fondMid">
					<br>
					<br>
					<font class="deca">Notre Net Promoter Score est de</font>
					<br>
					<?php
					echo "<font size=\"+4\" class=\"blanc\" style=\"font-weight:bold;\">".$_SESSION['nps']."</font>";
					?>

					</p>
				</article>
				<article class="image">
					<p class="fondR2">
					<?php
						if($_SESSION['pourcentageContent'] >= 80){
						echo "<img class=\"nps\" src=\"image/like.png\">";
						}
						elseif(	$_SESSION['pourcentageContent'] < 80 and $_SESSION['pourcentageContent'] >= 60){
						echo "<img class=\"nps\" src=\"image/thinking.png\">";
						}
						else{
						echo "<img class=\"nps\" src=\"image/dislike.png\">";
						}
					?>
					</p>
				</article>
			</section>
		</article>		
		<article class="ids">
			<p class="fondCom">
			<br>
			<font size="5" style="font-weight:bold; margin-left: 2%;">Commentaire :</font>
			<br>
			<br>
			<?php
				echo "<font size=\"4\"  style=\"word-break: break-word;\">".$_SESSION['commentaire']."</font>";
			?>
			</p>
		</article>
	</section>

		<section>
			<article class="tableau">
				<table border=1 class="fondTab">
					<tr>
						<td><font size="2">Date de l'étude</font></td>
						<td><font size="2">Total global de client répondants</font></td>
						<td><font size="2">Total de clients contents</font></td>
						<td><font size="2">Total de clients indécis</font></td>
						<td><font size="2">Total de clients mécontents</font></td>
						<td><font size="2">Vos promoteurs</font></td>
						<td><font size="2">Vos rétracteurs</font></td>
						<td><font size="2">Vos passifs</font></td>
						<td><font size="2">Taux de satisfaction</font></td>
						<td><font size="2">NPS</font></td>
					</tr>
					<tr>
						<?php

							echo "<td><font size=\"2\">Du dateD au dateF mai</font></td>

							<td>".$_SESSION['nbPersonne']."</td> 

							<td>".$_SESSION['nbContent']."</td> 

							<td>".$_SESSION['nbIndecis']."</td> 

							<td>".$_SESSION['nbMecontent']."</td>

							<td>".$_SESSION['nbPromoteur']."</td> 

							<td>".$_SESSION['nbDetracteur']."</td> 

							<td>".$_SESSION['nbPassif']."</td> 

							<td>".$_SESSION['pourcentageContent']."%</td>

							<td class=\"tabnps\">".$_SESSION['nps']."</td>";
						

					echo "</tr>
					<tr>";
					if($_SESSION['pourcentageContent'] >= 80){
						echo "<td colspan=\2\" class=\"idsV\"><font size=\"1\">Indice de satisfaction</font><br><font style=\"font-weight:bold;\">Excellent</font></td>";
						}
						elseif(	$_SESSION['pourcentageContent'] < 80 and $_SESSION['pourcentageContent'] >= 60){
						echo "<td colspan=\2\" class=\"idsJ\"><font size=\"1\">Indice de satisfaction</font><br><font style=\"font-weight:bold;\">Beaucoup d'indécis</font></td>";
						}
						else{
						echo "<td colspan=\2\" class=\"idsR\"><font size=\"1\">Indice de satisfaction</font><br><font style=\"font-weight:bold;\">Pas content</font></td>";
						}					 
						echo "<td><font class=\"vert\" style=\"font-weight:bold;\">".$_SESSION['pourcentageContent']."%</font></td>";
						echo "<td><font class=\"jaune\"style=\"font-weight:bold;\">".$_SESSION['poucentIndecis']."%</font></td>";
						echo "<td><font class=\"rouge\"style=\"font-weight:bold;\">".$_SESSION['poucentMecontent']."%</font></td>";
					
					
					if($_SESSION['pourcentageContent'] >= 80){
						echo "<td colspan=\"5\" class=\"idsV\"><font style=\"font-weight:bold;\">Excellent</font><br><font size=\"1\">Votre objectif est de maintenir le rythme <br> Bravo à toute l'équipe</font></td>";
						}
						elseif(	$_SESSION['pourcentageContent'] < 80 and $_SESSION['pourcentageContent'] >= 60){
						echo "<td colspan=\"5\" class=\"idsJ\"><font style=\"font-weight:bold;\">Beaucoup d'indécis</font><br><font size=\"1\"></font></td>";
						}
						else{
						echo "<td colspan=\"5\" class=\"idsR\"><font style=\"font-weight:bold;\">Pas content</font><br><font size=\"1\"> Nous vous invitont a faire les actions nécéssaires</font></td>";
						}
					?>
					</tr>
				</table>
			</article>
		</section>
	<footer>
		<?php echo "<div class=\"zoneClient\"><p class=\"fondC\"><br>".$_SESSION['nomEntreprise']." ".$_SESSION['ville']." ".$_SESSION['codePostal']."</p></div>";?>
		<?php echo "<img class=\"logoClient\" src=\"data:".$_SESSION['imageType'].";base64,".$_SESSION['encodage']."\">";?>
		<?php echo "<div class=\"zoneClient2\"><p class=\"fondC\">Du ".$_SESSION['dateDebut']." au ".$_SESSION['dateFin']."<br> ".$_SESSION['nbPersonne']." clients répondants</p></div>";?>
		<div class="zoneCC"><p class="fondCC">CONSOMMATEURS-CONTENTS <br> Contact : 0652233889 <br> info@consommateurs-contents.com</p></div>
		<img class="logoCC" src="image/logoCC.jpg">
		<br>
		
	</footer>
	<center>
			<a class="block1" href="template1.php"><</a>
			<a class="block2" href="template.php">></a>
		</center>
	<script>
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};
		var variableContent_php = "<?php echo $_SESSION['pourcentageContent']; ?>";
		var variableIndecis_php = "<?php echo $_SESSION['poucentIndecis']; ?>";
		var variableMecontent_php = "<?php echo $_SESSION['poucentMecontent']; ?>";
		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						variableContent_php,
						variableIndecis_php,
						variableMecontent_php,
						
					],
					backgroundColor: [
						window.chartColors.green,
						window.chartColors.yellow,
						window.chartColors.red,
					],
					label: 'Dataset 1'
				}],
				 
				labels: [
					
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myDoughnut = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myDoughnut.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myDoughnut.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (config.data.datasets.length > 0) {
				config.data.labels.push('data #' + config.data.labels.length);

				var colorName = colorNames[config.data.datasets[0].data.length % colorNames.length];
				var newColor = window.chartColors[colorName];

				config.data.datasets.forEach(function(dataset) {
					dataset.data.push(randomScalingFactor());
					dataset.backgroundColor.push(newColor);
				});

				window.myDoughnut.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myDoughnut.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			config.data.labels.splice(-1, 1);

			config.data.datasets.forEach(function(dataset) {
				dataset.data.pop();
				dataset.backgroundColor.pop();
			});
			
			window.myDoughnut.update();
		});
	</script>		
	</body>
</html>


<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Consconte</title>
		<link rel="stylesheet" type="Text/css" href="template1.css">
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
			</section>
		</header>
		<section>
			<article class="gauche">
				<div class="fondL">	
					<br><br><br><br>					
					<?php
						echo "<font class=\"titre\" size=\"3\" style=\"font-weight:bold;\">Les clients répondants du ".$_SESSION['dateDebut']." au ".$_SESSION['dateFin']." :</font>";
					?>
						<div id="canvas-holder" style="width:115%" class="graph">
					<canvas id="chart-area" style="heigth:115px;"></canvas>
					<?php
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
					<br><br><br><br><br><br>
					<center><font class="legende" size="5"><a class="vert">♛ </a>Nos promoteurs  <a class="jaune">♛ </a>Nos passifs  <a class="rouge">♛ </a>Nos détracteurs</font></center>
				</div>
				</div>
			</article>
		</section>
		<section>
			<article class="droiteA">	
				<section>
					<article class="tableau">
						<table class="tableau" border="1">
							<tr>
								<td class="tableau"><font size="2">Date de l'étude</font></td>
								<td class="tableau"><font size="2">Total global de client répondants</font></td>
								<td class="tableau"><font size="2">Total de clients contents</font></td>
								<td class="tableau"><font size="2">Total de clients indécis</font></td>
								<td class="tableau"><font size="2">Total de clients mécontents</font></td>
							</tr>
							<tr>
								<?php
								echo "<td class=\"tableau\"><font size=\"2\">".$_SESSION['dateDebut']." au ".$_SESSION['dateFin']."</font></td>";
								echo "<td class=\"tableau\"><font size=\"2\">".$_SESSION['nbPersonne']."</font></td>";
								echo "<td class=\"tableau\"><font size=\"2\">".$_SESSION['pourcentageContent']."%</font></td>";
								echo "<td class=\"tableau\"><font size=\"2\">".$_SESSION['poucentIndecis']."%</font></td>";
								echo "<td class=\"tableau\"><font size=\"2\">".$_SESSION['poucentMecontent']."%</font></td>";
								?>
							</tr>
						</table>
					</article>
					<article class="image">
						<div class="fondImg">
							<?php
							if($_SESSION['pourcentageContent'] >= 80){
								echo "<img class=\"appre\" src=\"image/like.png\">";
							}
							elseif(	$_SESSION['pourcentageContent'] < 80 and $_SESSION['pourcentageContent'] >= 60){
								echo "<img class=\"appre\" src=\"image/thinking.png\">";
							}
							else{
								echo "<img class=\"appre\" src=\"image/dislike.png\">";
							}
							?>		
						</div>
					</article>
				</section>
			</article>
			<article class="droiteB">
				<div class="fondCom">
					<center><font class="merci2" size="5" style="font-weight:bold;"><br>&nbsp Merci à nos clients qui nous font confiance et qui sont satisfaits de nos services.</font></center>
					<font class="zoneCom">
						<?php 
							if ($_SESSION['pourcentageContent'] >= 61 && $_SESSION['pourcentageContent'] <= 79){
									echo " <h5>Notre objectif est de maintenir la relation de proximité que nous avons avec nos clients. Il est également important pour nous, de mieux comprendre les causes d’insatisfaction et d'agir.</h4>
								
										<br><center><font class=\"merci\" size=\"6\" style=\"font-weight:bold;\">Bravo et merci à toutes les équipes.</font></center>";
							}
							else if ($_SESSION['pourcentageContent'] >= 80 && $_SESSION['pourcentageContent'] <= 89){
								echo "<center><font class=\"zoneBleu\" size=\"4\">Notre ambition est de maintenir ce niveau avec un objectif  de nous améliorer chaque jour.
										La relation de proximité que nous avons construite avec nos clients , permet de mieux comprendre les causes d’insatisfaction et d’agir en conséquence.</font></center>
										<br><center><font class=\"merci\" size=\"6\" style=\"font-weight:bold;\">Bravo et merci à toutes les équipes.</font></center>";
							}
							else if ($_SESSION['pourcentageContent'] >= 90 && $_SESSION['pourcentageContent'] <= 100){
								echo "<center><font class=\"zoneBleu\" size=\"4\">Vous êtes ".$_SESSION['nbContent']." qui trouvent nos services , excellents. Vous êtes prêts à nous recommander. 1000 mercis.
										Nous sommes fières des avis positifs. Nous maintenons ce niveau d’excellence pour encore mieux vous services.
										Notre ambition est de créer des relations de proximité de qualité avec nos clients.</font></center>
										<br><center><font class=\"merci\" size=\"6\" style=\"font-weight:bold;\">Bravo et merci à toutes les équipes.</font></center>";
							}
							else{
								echo "<center>MAUVAIS !!!</center>";
							}
							echo "<center><br><font class=\"zoneBleu\" size=\"4\">".$_SESSION['signature']."</font></center>";
						?>
					</font>
				</div>
		

	
			<?php echo "<div class=\"zoneClient\"><p class=\"fondFoot\"><br><br>".$_SESSION['nomEntreprise']." ".$_SESSION['ville']." ".$_SESSION['codePostal']."</p>";?>
			
			<?php echo "<img class=\"logoClient\" src=\"data:".$_SESSION['imageType'].";base64,".$_SESSION['encodage']."\"></div>";?>
			<br><br>
			<div class="zoneCC">
				<p class="fondFoot">
					<font size="2"> 
						<br>
						CONSOMMATEURS-CONTENTS Société CONSCONTE 
						<br>
						Contact : 0652233889 <br> info@consommateurs-contents.com
					</font>
				</p>
			<img class="logoCC" src="image/logoCC.png">
			</div>
			<center>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><a class="block2" href="template2.php">suivant ></a>
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
				

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
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Krona+One|Orbitron|Questrial|Raleway|Roboto+Condensed" rel="stylesheet">
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
		echo "<font size=\"7\">".
		strtoupper($_SESSION['nomEntreprise'].
		" // </font><font size=\"7\">".
		strtoupper($_SESSION['ville'])." ".
		strtoupper($_SESSION['codePostal']).
		"</font>";?>
			</article>

			<div class="barre"></div>
			
			<br>

			<div class="zoneB"></div>

			<section class="zoneImage">
				<article class="zoneImage">
					
			
					<div id="canvas-holder" style="width:115%" class="graph">
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
					?><br><br><br><br>
					<?php echo" <font class=\"adroit\">".$_SESSION['nbPersonne']." répondant(e)s du ".$_SESSION['dateDebut']." au ".$_SESSION['dateFin'].".</font>";?>
					<center><font class="deca" size="5"><a class="vert">♛ </a>Nos promoteurs  <a class="jaune">♛ </a>Nos passifs  <a class="rouge">♛ </a>Nos détracteurs</font></center>
					
				</article>
			</section>
	
			<?php echo "<div class=\"zoneA\"><center><div class=\"textzonea\"><br><br><br>Vous avez été&nbsp;".$_SESSION['nbContent']." a être satisfait(e)s de nos services.</div></center></div>";?>
			
			<?php echo "<div class=\"pourcentage\"><font style=\"font-weight:bold;\">".$_SESSION['pourcentageContent']."%</font></div>";?>
			<div class="zoneC"><i>TAUX DE SATISFACTION</i></div>		

			<div class="zoneD"></div>

			<section class="tableau">
				<center><font class="merci2" size="8" style="font-weight:bold;"><br><font>&nbsp Merci à nos clients qui nous font confiance et qui sont satisfaits de nos services.</font></font></center>
			</section>
			<div class="zoneE"><center></center></div>


			<article class="commentaire">
				<div class="fondCom">
					<center>
						<font class="zoneCom">
<!--
							zone de text 
-->
							<?php 
								if ($_SESSION['pourcentageContent'] >= 61 && $_SESSION['pourcentageContent'] <= 79){
									echo " <h5>Notre objectif est de maintenir la relation de proximité que nous avons avec nos clients. Il est également important pour nous, de mieux comprendre les causes d’insatisfaction et d'agir.</h4>
											<br><br>
											<center><font class=\"merci\" size=\"6\" style=\"font-weight:bold;\">Bravo et merci à toutes les équipes.</font></center>";
								}
								else if ($_SESSION['pourcentageContent'] >= 80 && $_SESSION['pourcentageContent'] <= 89){
									echo "<h4>Notre ambition est de maintenir ce niveau avec un objectif  de nous améliorer chaque jour.
											La relation de proximité que nous avons construite avec nos clients, permet de mieux comprendre les causes d’insatisfaction et d’agir en conséquence.</h4>
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
				
				<font size="-0.5">CONSOMMATEURS-CONTENTS SOCIÉTÉ CONSCONTE</font>
				<br>
				<font size="-0.5">CONTACT : 06 52 23 38 89</font>
				<br>
				<font size="-0.5">INFO@CONSOMMATEURS-CONTENTS.COM</font>
				<br>
				<font size="-0.5">www.consommateurs-contents.com</font>

			</article>
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

	<a class="block1" href="template2.php"><</a>
	</body>
<html>

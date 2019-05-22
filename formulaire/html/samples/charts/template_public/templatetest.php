<?php
session_start();
require_once ('../../../jpgraph-4.2.1/src/jpgraph.php');
require_once ('../../../jpgraph-4.2.1/src/jpgraph_pie.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Consconte</title>
		<link rel="stylesheet" type="Text/css" href="template.css">
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
					<center><?php // content="text/plain; charset=utf-8"

								// Some data
								$data = array(50,35,15);

								// Create the Pie Graph.
								$graph = new PieGraph(1200,800);
								$graph->SetShadow();

								// Create plots
								$size=0.13;
								$p1 = new PiePlot($data);
								$graph->Add($p1);

								$p1->SetSize($size);
								$p1->SetCenter(0.25,0.32);
								$p1->SetSliceColors(array('#33cc33','#ff8000','#ff3300'));



								$gdImgHandler = $graph->Stroke(_IMG_HANDLER);
								print_r ($gdImgHandler);
								?>
								</center>
						
					<font class="deca" size="-1">
						<center>
						<a class="vert">■ Nos promoteurs </a>
						<a class="jaune">■ Nos passifs </a>
						<a class="rouge">■ Nos détracteurs</a>
						</center>
					</font>
						
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
								echo "<td class=\"tableau\"><font size=\"2\">".$_SESSION['nbTotal']."</font></td>";
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
					<br><br><br>
					
					<center><font size="6" style="font-weight:bold;">Merci chères clientes</font></center>

					<br>

					<center>
						<font><?php
							echo "<font style=\"font-weight:bold;\">Vous êtes plus de ".$_SESSION['pourcentageContent']."%</font>";?>
							satisfaites de nos prestations.
							<br>
							Nous allons continuer a travailler pour maintenir ce taux voire l'augmenter.
							<br>
							Nous remercions également nos clientes insatisfaites et prendrons contact avec elles pour mieux comprendre leurs attentes afin d'y répondre.	
						</font>
					</center>

					<br>

					<center><font>Bravo et merci à toute l'équipe</font></center>

					<br>
					
					<center><font size="2"><i>Stéphanie Caussé - La dirigeante</i></font></center>
				</div>
			</article>
		</section>

		<footer>
			
			

			<?php echo "<div class=\"zoneClient\"><p class=\"fondFoot\"><br>".$_SESSION['entreprise']." ".$_SESSION['ville']." ".$_SESSION['cp']."</p></div>";?>
			
			<img class="logoClient" src="image/logoClient.png">

			<div class="zoneCC">
				<p class="fondFoot"><font size="2"> 
					CONSOMMATEURS-CONTENTS Société CONSCONTE 
					<br>
					Contact : 0652233889 <br> info@consommateurs-contents.com
				</font></p>
			</div>
			<img class="logoCC" src="image/logoCC.png">
			
			<center>
			<a class="nav-link" href="../template_support_de_communication/template.php">Suivant</a>
		  </center>
		</footer>

	</body>
</html>
				

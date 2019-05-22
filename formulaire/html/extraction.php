<?php
session_start();
include "libForm.php";

$_SESSION['choixMarque'] = $_POST['choixMarque'];
$_SESSION['dateDebut'] = $_POST['dateDebut'];
$_SESSION['dateFin'] = $_POST['dateFin'];

$enquete = libForm::genererTemplateValEnquete($_SESSION['choixMarque'],$_SESSION['dateDebut'],$_SESSION['dateFin']);
$entreprise = libForm::genererTemplateValEntreprise($_SESSION['choixMarque']);
$dates = libForm::genererTemplateValDate($_SESSION['dateDebut'],$_SESSION['dateFin']);


$val = 0;
foreach($enquete as $uneEnquete){
	foreach($uneEnquete as $i){
		if($val == 0){
			$nbTotal = $uneEnquete[$val];
		}
		elseif ($val == 1){
				$nbContente = $uneEnquete[$val];
		}
		elseif ($val == 2){
				$nbIndécise = $uneEnquete[$val];
		}
		elseif ($val == 3){
				$nbMecontent = $uneEnquete[$val];
		}
		elseif ($val == 4){
				$nbPromoteur = $uneEnquete[$val];
		}
		elseif ($val == 5){
				$nbDetracteur = $uneEnquete[$val];
		}
		elseif ($val == 6){
				$nbPassif = $uneEnquete[$val];
		}
		elseif ($val == 7){
				$pourcentageContent = $uneEnquete[$val];
		}
		elseif ($val == 8){
				$nps = $uneEnquete[$val];
		}
		else{
			$commentaire = $uneEnquete[$val];
		}
		$val = $val + 1;
		if ($val > 9){
			break;
		}
		
	}
}

$val = 1;
foreach($entreprise as $uneEntreprise){
	foreach($uneEntreprise as $i){
		if($val == 1){
			$entreprise = $uneEntreprise[$val];
		}
		elseif ($val == 2){
				$cp = $uneEntreprise[$val];
		}
		else{
			$ville = $uneEntreprise[$val];
		}
		$val = $val + 1;
		if ($val > 3){
			break;
		}
	}		
}

$val = 1;
foreach($dates as $uneDate){
	foreach($uneDate as $i){
		if($val == 1){
			$dateDebut = $uneDate[$val];
		}
		else{
			
			$dateFin = $uneDate[$val];
		}
		$val = $val + 1;
		if ($val > 2){
			break;
		}
	}		
}

$_SESSION['nbTotal'] = $nbTotal;
$_SESSION['nbContent'] = $nbContente;
$_SESSION['nbIndécis'] = $nbIndécise;
$_SESSION['nbMecontent'] = $nbMecontent;
$_SESSION['nbPromoteur'] = $nbPromoteur;
$_SESSION['nbDetracteur'] = $nbDetracteur;
$_SESSION['nbPassif'] = $nbPassif;
$_SESSION['pourcentageContent'] = $pourcentageContent;
$_SESSION['nps'] = $nps;
$_SESSION['commentaire'] = $commentaire;
$_SESSION['entreprise'] = $entreprise;
$_SESSION['cp'] = $cp;
$_SESSION['ville'] = $ville;
$_SESSION['dateDebut'] = $dateDebut;
$_SESSION['dateFin'] = $dateFin;
$_SESSION['poucentIndecis'] = $_SESSION['nbIndécis']*100/$_SESSION['nbTotal'];
$_SESSION['poucentMecontent'] = $_SESSION['nbMecontent']*100/$_SESSION['nbTotal'];
$_SESSION['poucentIndecis'] = round($_SESSION['poucentIndecis'],0);
$_SESSION['poucentMecontent'] = round($_SESSION['poucentMecontent'],0);
$_SESSION['dateDebut'] = explode("-", $_SESSION['dateDebut']);
$_SESSION['dateDebut'] =$_SESSION['dateDebut'][2].'/'.$_SESSION['dateDebut'][1].'/'.$_SESSION['dateDebut'][0];
$_SESSION['dateFin'] = explode("-", $_SESSION['dateFin']);
$_SESSION['dateFin'] =$_SESSION['dateFin'][2].'/'.$_SESSION['dateFin'][1].'/'.$_SESSION['dateFin'][0];

$page_de_redirection='template_public/templatetest.php';
header('Location: '.$page_de_redirection);
exit;
?>

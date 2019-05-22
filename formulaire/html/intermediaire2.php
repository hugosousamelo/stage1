<?php
session_start();
/*
$_SESSION['nomEntreprise'];
$_SESSION['codePostal'];
$_SESSION['ville'];
$_SESSION['dateDebut'];
$_SESSION['dateFin']
*/
$_SESSION['nbPersonne'] = $_POST['nbPersonne'];
$_SESSION['nbContent'] = $_POST['nbContent'];
$_SESSION['nbIndecis'] = $_POST['nbIndecis'];
$_SESSION['nbMecontent'] = $_POST['nbMecontent'];
$_SESSION['nbPromoteur'] = $_POST['nbPromoteur'];
$_SESSION['nbDetracteur'] = $_POST['nbDetracteur'];
$_SESSION['nbPassif'] = $_POST['nbPassif'];
$_SESSION['nps'] = $_POST['nbContent'] - $_POST['nbDetracteur'];
$_SESSION['pourcentageContent'] = $_SESSION['nbContent']*100/$_SESSION['nbPersonne'];
$_SESSION['pourcentageContent'] = round($_SESSION['pourcentageContent'],0);
$_SESSION['commentaire'] = $_POST['commentaire'];
$_SESSION['poucentIndecis'] = $_SESSION['nbIndecis']*100/$_SESSION['nbPersonne'];
$_SESSION['poucentMecontent'] = $_SESSION['nbMecontent']*100/$_SESSION['nbPersonne'];
$_SESSION['poucentIndecis'] = round($_SESSION['poucentIndecis'],0);
$_SESSION['poucentMecontent'] = round($_SESSION['poucentMecontent'],0);
$_SESSION['dateDebut'] = explode("-", $_SESSION['dateDebut']);
$_SESSION['dateFin'] = explode("-", $_SESSION['dateFin']);
$_SESSION['dateDebut'] =$_SESSION['dateDebut'][2].'/'.$_SESSION['dateDebut'][1].'/'.$_SESSION['dateDebut'][0];
$_SESSION['dateFin'] =$_SESSION['dateFin'][2].'/'.$_SESSION['dateFin'][1].'/'.$_SESSION['dateFin'][0];

$page_de_redirection='samples/charts/template1.php';
header('Location: '.$page_de_redirection);
exit;
?>

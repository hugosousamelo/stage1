<?php
session_start();
include("libForm.php");


$_SESSION['nbPersonne'] = $_POST['nbPersonne'];
$_SESSION['nbContent'] = $_POST['nbContent'];
$_SESSION['nbIndecis'] = $_POST['nbIndecis'];
$_SESSION['nbMecontent'] = $_POST['nbMecontent'];
$_SESSION['nbPromoteur'] = $_POST['nbPromoteur'];
$_SESSION['nbDetracteur'] = $_POST['nbDetracteur'];
$_SESSION['nbPassif'] = $_POST['nbPassif'];
$_SESSION['nps'] = $_POST['nps'];
$_SESSION['pourcentageContent'] = $_SESSION['nbContent']*100/$_SESSION['nbPersonne'];
$_SESSION['pourcentageContent'] = round($_SESSION['pourcentageContent'],0);
$_SESSION['commentaire'] = $_POST['commentaire'];

libForm::createTables($_SESSION['nomEntreprise'],$_SESSION['codePostal'],$_SESSION['ville'],$_SESSION['dateDebut'],$_SESSION['dateFin'],$_SESSION['nbPersonne'],$_SESSION['nbContent'],$_SESSION['nbIndecis'],$_SESSION['nbMecontent'],$_SESSION['nbPromoteur'],$_SESSION['nbDetracteur'],$_SESSION['nbPassif'],$_SESSION['nps'],$_SESSION['pourcentageContent'],$_SESSION['commentaire']);

$page_de_redirection='index.php';
header('Location: '.$page_de_redirection);
exit;

?>

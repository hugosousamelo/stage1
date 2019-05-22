<?php
class libForm{
    static function connexiondb($host,$dbname,$user,$password){
        $connect = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        return $connect;
    }
	
	static function createTables($nomEntreprise,$codePostal,$ville,$dateDebut,$dateFin,$nbPersonne,$nbContent,$nbIndecis,$nbMecontent,$nbPromoteur,$nbDetracteur,$nbPassif,$nps,$pourcentageContent){
		try {
			/*
			$cnx = libForm::connexiondb("mysql-supercontent.alwaysdata.net","supercontent_infotemplate","144304_elvire","edwinEDWIN");
			*/
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$req = "insert into Entreprise values(\"\",\"".$nomEntreprise."\",\"".$codePostal."\",\"".$ville."\");";
			echo $req;
			$result = $cnx->query($req);
			$req = "insert into DateEnquete values(\"".$dateDebut."\",\"".$dateFin."\");";
			echo $req;
			$result = $cnx->query($req);
			$val = true;
			$id = 0;
			while($val != false){
				$req = "select idEntreprise from Entreprise where idEntreprise = ".$id.";";
				$result = $cnx->query($req);
				if($row = $result->fetch()){
					$requette = "insert into Enquete values(\"\",\"".$nomEntreprise."\",\"".$dateDebut."\",\"\",\"".$nbPersonne.",".$nbContent.",".$nbIndecis.",".$nbMecontent.",".$nbPromoteur.",".$nbDetracteur.",".$nbPassif.",".$pourcentageContent.",".$nps.",".$id.",\"".$dateDebut."\");";
					echo $requette;
					$result = $cnx->query($requette);
					$val = false;
				}
				else{
					$id = $id +1;
				}
			}
		}
		catch(PDOExeception $e) {
			die('Erreur : '.$e->getMessage());
		}
	}
	
	static function selectMarque(){
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$req = "select nom from entreprise;";
			$result = $cnx->query($req);
			echo $result;
			return $result;
	}
	
	static function selectDateParMarque($marque){
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$req = "select dateDebut from enquete a, entreprise b where a.idEntreprise = b.idEntreprise and b.nom = ".$marque.";";
			$result = $cnx->query($req);
			echo $result;
			return $result;
	}
	/*
	static function genererTemplate($marque,$date){
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$req = "select * from ;";
			$result = $cnx->query($req);
			echo $result;
			return $result;
	}*/	
}
?>

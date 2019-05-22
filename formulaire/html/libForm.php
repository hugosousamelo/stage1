<?php
class libForm{
    static function connexiondb($host,$dbname,$user,$password){
        $connect = new PDO('mysql:host=localhost;dbname=gsbFrais'.$dbname,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        return $connect;
    }
	
	static function createTables($nomEntreprise,$codePostal,$ville,$dateDebut,$dateFin,$nbPersonne,$nbContent,$nbIndecis,$nbMecontent,$nbPromoteur,$nbDetracteur,$nbPassif,$nps,$pourcentageContent,$commentaire){
		try {
			/* $cnx = libForm::connexiondb("mysql-supercontent.alwaysdata.net","infoForTemplate","144304_elvire","Elvire123"); */
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$req = "insert into Entreprise values(\"\",\"".$nomEntreprise."\",\"".$codePostal."\",\"".$ville."\");";
			$result = $cnx->query($req);
			$req = "insert into DateEnquete values(\"\",\"".$dateDebut."\",\"".$dateFin."\");";
			$result = $cnx->query($req);
			$val = true;
			$id = 1;
			$autodate = 1;
			while($val != false){
				$req = "select idEntreprise from Entreprise where idEntreprise = ".$id.";";
				$result = $cnx->query($req);
				$result->fetch();
				if($result->rowCount() == 0){
					$id = $id -1;
					$autodate = $autodate -1;				
					$requette = "insert into Enquete values(\"\",".$nbPersonne.",".$nbContent.",".$nbIndecis.",".$nbMecontent.",".$nbPromoteur.",".$nbDetracteur.",".$nbPassif.",".$pourcentageContent.",".$nps.",\"".$commentaire."\",".$id.",".$autodate.");";
					$result = $cnx->query($requette);
					$val = false;
				}
				else{
					$id = $id +1;
					$autodate = $autodate + 1;
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
			return $result;
	}
	
	static function selectDateParMarque($marque){
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$req = "select dateDebut from enquete a, entreprise b where a.idEntreprise = b.idEntreprise and b.nom = (select idEntreprise from entreprise where nom = \"".$marque."\");";
			$result = $cnx->query($req);
			$result->fetch();
			return $result;
	}
	
	static function genererTemplateValEnquete($marque,$dateDebut,$dateFin){
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$reqEnquete = "select nbTotal,nbTotalContent,nbTotalIndecis,nbTotalMecontent,nbPromoteur,nbDetracteur,nbPassif,nbSatisfait,NPS,commentaire from entreprise a, enquete b, dateEnquete c where
				a.idEntreprise = b.idEntreprise and b.idDate = c.idDate and b.idEntreprise = \"".$marque."\" and b.idDate = (select idDate from dateEnquete where dateDebut = \"".$dateDebut."\" and dateFin = \"".$dateFin."\");";
			$result = $cnx->query($reqEnquete);
			return $result;
	}
	
	static function genererTemplateValEntreprise($marque){
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$reqEnquete = "select * from entreprise where idEntreprise = \"".$marque."\";";
			$result = $cnx->query($reqEnquete);
			return $result;
	}
	
	static function genererTemplateValDate($dateDebut,$dateFin){
			$cnx = libForm::connexiondb("localhost","infoForTemplate","root","");
			$reqEnquete = "select * from dateEnquete where dateDebut = \"".$dateDebut."\" and dateFin = \"".$dateFin."\";";
			$result = $cnx->query($reqEnquete);
			return $result;
	}
	
	static function base64_encode_image ($filename=string,$filetype=string,$filesize=int) {
		if ($filename) {
			$imgbinary = fread(fopen($filename, "r"), $filesize);
			return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
		}
	} 
	static function generateDataUri($data)
	{
		if(!is_string($data))
		{
			throw new Exception('File error');
		}
		
		$type = libForm::mimeTypeFromString($data);
		return 'data:' . ($type ? "$type;" : '') . 'base64,' . base64_encode($data);
	}

	static function mimeTypeFromString($data)
	{
		if (extension_loaded('fileinfo') && preg_match('#^(\S+/[^\s;]+)#', finfo_buffer(finfo_open(FILEINFO_MIME), $data), $m)) {
			return $m[1];
		} elseif (strncmp($data, "\xff\xd8", 2) === 0) {
			return 'image/jpeg';
		} elseif (strncmp($data, "\x89PNG", 4) === 0) {
			return 'image/png';
		} elseif (strncmp($data, "GIF", 3) === 0) {
			return 'image/gif';
		} else {
			return 'application/octet-stream';
		}
	}
	function image_convert(){

		$imgData = base64_encode(file_get_contents($img_file));

		// Format the image SRC:  data:{mime};base64,{data};
		$src = 'data: '.mime_content_type($img_file).';base64,'.$imgData;

		// Affichage
		 
		echo '<figure><img src="'.$src.'" alt="barre graphe"></figure>';
                         
 }
}
?>

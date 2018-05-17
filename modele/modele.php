<?php
//execution de la requete
function executeRequete($cnx,$sql,$parametre=NULL){
	if($parametre == NULL){
		$idRequete = $cnx->query($sql);
	}
	else{
		$idRequete = $cnx->prepare($sql);
		$idRequete->execute($parametre);	
	}
	return $idRequete;
}
//appele de la fonction de connexion

function getBD(){

    $cnx = connexion( UTILISATEUR, MOTDEPASSE, SERVER, BASEDEDONNEE);
    return $cnx;
}
//connexion a la BD
function connexion($utilisateur,$motdepasse,$server,$basededonnee){
	try{
		$cnx = new PDO('mysql:host='.$server.';dbname='.$basededonnee,
                        $utilisateur, $motdepasse,
                        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		return $cnx;
	}
	catch(PDO_exeption $e){
		print 'erreur:'.$e->getMessage();
	exit;
	}
	
}
?>

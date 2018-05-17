<?php
//Ne pas modifier
function connexion($utilisateur,$motdepasse,$server,$basededonnee){
	try{
		$cnx = new PDO('mysql:host='.$server.';dbname='.$basededonnee, $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		return $cnx;
	}
	catch(PDO_exeption $e){
		print 'erreur:' . $e->getMessage();
	exit;
	}
	
}
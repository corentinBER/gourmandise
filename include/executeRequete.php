<?php
//ne pas modifierc
function query1($cnx,$sql,$parametre=NULL){
	if($parametre == NULL){
		$idRequete = $cnx->query($sql);
	}
	else{
		$idRequete = $cnx->prepare($sql);
		$idRequete->execute($parametre);	
	}
	return $idRequete;
}
?>
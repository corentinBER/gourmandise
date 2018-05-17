<?php

require_once 'include/connexion.php';
require_once 'include/infoConnexion.php';
require_once 'include/executeRequete.php';

$cnx = connexion(UTILISATEUR, MOTDEPASSE, SERVER, BASEDEDONNEE);
$msg = "";
//$varQuery = "CREATE TABLE utilisateurs(
//            prenom VARCHAR(25) NOT NULL,
//            nom VARCHAR(40) NOT NULL,
//            login VARCHAR(255) NOT NULL UNIQUE,
//            motpasse VARCHAR (255) NOT NULL)
//            CHARSET UTF8 ENGINE=InnoDB";
//
//$idRequete = query1($cnx, $varQuery);
$right = "tk!@";
$left = "ar30&b%";


$prenom = "Moz";
$nom = "Arth";
$login = "momo";
$motdepasse = "mozi";
$jeton = hash('ripemd128', "$left.$motdepasse.$right");

ajoutUtilisateur($cnx, $prenom, $nom, $login, $jeton, $msg);
echo "<p>$msg</p>";

$prenom = "jack";
$nom = "mar";
$login = "jmar";
$motdepasse = "toto";
$jeton = hash('ripemd128', "$left.$motdepasse.$right");
ajoutUtilisateur($cnx, $prenom, $nom, $login, $jeton, $motdepasse);
echo "<p>$msg</p>";

function ajoutUtilisateur($cnx, $prenom, $nom, $login, $jeton, &$msg){
    $sql = "INSERT INTO utilisateurs VALUES('$prenom', '$nom', '$login', '$jeton')";
    $idRequete = query1($cnx, $sql);
    $msg = $msg.sprintf("L'utilisateur %s %s a été ajouté avec succes. <br>", $nom, $prenom);
}
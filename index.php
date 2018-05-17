
<?php
//info de connexion
require_once 'include/configuration.php';
//travail sur la table produit
if (isset($_REQUEST["gestion"])) {
    $gestion = $_REQUEST['gestion'];
    var_dump($_REQUEST["gestion"]);
} else {
    $gestion = 'produit';
}
// appele du controleur principale (routeur.php)
require_once 'controleur/router.php';
?>


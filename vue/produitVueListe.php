<?php
require_once 'include/libs/Smarty.class.php';
    
$template = new Smarty();
$listeProduits = array();
$i = 0;
while ($row = $idRequete->fetch()){
    $listeProduits[$i]['reference'] = $row['reference'];
    $listeProduits[$i]['designation'] = $row['designation'];
    $listeProduits[$i]['prix'] = $row['prix_unitaire_ht'];
    $i++;
}

$nblig = $idRequete->rowCount();

$template->assign('msg', 'Liste de Produits');
$template->assign('nblig', $nblig);
$template->assign('listeProduits', $listeProduits);
$template->display('vue/produitVueListe.tpl');
//echo 'toto';
    
?>



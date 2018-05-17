<?php

//si on est sur produit alors on appele le controleur logique 
//(produitControleur.php)
switch ($gestion) {
    case 'produit':
        require_once $gestion . 'Controleur.php';
        break;
    default :
        echo 'Impossible';
}
if (isset($_POST['ajouter'])) {
    ajouter($_POST);
} elseif (isset($_POST['valider'])) {
    valider($_POST);
} elseif (isset($_POST['consulter'])) {
    consulter($_POST);
} elseif (isset($_POST['modifier'])) {
    modifier($_POST);
} elseif (isset($_POST['suprimer'])) {
    suprimer($_POST);
} else if (isset($_POST['produit'])) {
    liste();
} else if (isset($_POST['search'])) {
    var_dump($_POST);
    search($_POST);
} else {
    accueil();
}
?>



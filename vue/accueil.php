<?php
require_once 'include/libs/Smarty.class.php';
require_once 'include/configuration.php';

session_start();
if(!isset($_SESSION['login'])){
    header('Location:authentification.php');
}

$template = new Smarty();

switch ($_POST){
    case 'Produit':
        require_once 'index.php';
        break;
    case 'Vendeur':
        break;
    case 'Client':
        break;
        default :
}

$template->display('vue/accueil.tpl');
?>


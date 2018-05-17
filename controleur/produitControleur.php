<?php
require_once 'modele/produitModele.php';
function accueil(){
    require_once 'vue/accueil.php';
}

function liste(){
   $idRequete = listeProduits();
   require_once 'vue/produitVueListe.php';
}

function ajouter($parametre){
   $action = $parametre['action'];
   require_once 'vue/ficheAjoutListe.php';
}

function consulter($post){
    $action = $post['consulter'];
   $idRequete =  consultProduit($post);
   require_once 'vue/ficheAjoutListe.php';
}

function valider($post){
   $idRequete =  validerProduit($post);
   $idRequete = listeProduits();
   require_once 'vue/produitVueListe.php';
}

function modifier($post){   
   $action = $post['modifier'];
   $idRequete =  modifProduit($post);
   liste();
}

function suprimer($post){   
   $action = $post['suprimer'];
   $idRequete =  supprimerProduit($post);
   liste();
}

function search($post){
    $action = $post['action'];
    $idRequete =  searchproduit($post);
    require_once 'vue/ficheAjoutListe.php';
}


?>




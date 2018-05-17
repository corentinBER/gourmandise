<?php

include 'modele.php';

function listeProduits() {
    $cnx = getBD();
    $sql = 'SELECT * FROM produit';
    $idRequete = executeRequete($cnx, $sql);
    return $idRequete;
}

//$_POST validation fiche ajout
function validerProduit($post) {
    $cnx = getBD();
    $designation = $post['des'];
    $quantite = $post['quantity'];
    $descriptif = $post['description'];
    $prix_unitaire_ht = $post['price'];
    $stock = $post['stock'];
    $poids_piece = $post['weight'];

    $sql = 'INSERT INTO produit(designation, quantite, descriptif, '
            . 'prix_unitaire_ht, stock, poids_piece) VALUE(?,?,?,?,?,?) ';
    $idRequete = executeRequete($cnx, $sql, array($designation, $quantite,
        $descriptif, $prix_unitaire_ht, $stock, $poids_piece));
    return $idRequete;
}

function consultProduit($post) {
    $reference = $post['id'];
    $cnx = getBD();
    $sql = 'SELECT * FROM produit WHERE reference = ?';
    $idRequete = executeRequete($cnx, $sql, array($reference));
    return $idRequete;
}

function modifProduit($post) {
    $reference = $post['reference'];
    $designation = $post['des'];
    $quantite = $post['quantity'];
    $descriptif = $post['description'];
    $prix_unitaire_ht = $post['price'];
    $stock = $post['stock'];
    $poids_piece = $post['weight'];

    $cnx = getBD();

    $sql = 'UPDATE produit SET designation = ?, quantite = ?, descriptif = ?, prix_unitaire_ht = ?, stock = ?, poids_piece  = ? WHERE reference = ?';
    $idRequete = executeRequete($cnx, $sql, array($designation, $quantite,
        $descriptif, $prix_unitaire_ht, $stock, $poids_piece, $reference));
    return $idRequete;
}

function supprimerProduit($post) {
    $reference = $post['id'];
    
    $cnx = getBD();
    
    $sql = 'DELETE FROM produit WHERE reference = ?';
    $idRequete = executeRequete($cnx, $sql, array($reference));
    return $idRequete;
}

function searchproduit($post) {
    
    $recherche = $post['keyword'];
    var_dump($recherche);
    $cnx = getBD();

    $sql = "SELECT * FROM produit WHERE designation LIKE '%$recherche%'";
    //$idRequete->fetch_all(PDO::FETCH_ASSOC);
    
    $idRequete = executeRequete($cnx, $sql);
    var_dump($sql);
    return $idRequete;
}
?>



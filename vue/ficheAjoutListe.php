<?php

require_once 'include/libs/Smarty.class.php';


//if(isset($_POST['ajouter'])){
//    $designation=$_POST['designation'];
//    $prix=$_POST['prix_unitaire_ht'];
//    $stock=$_POST['stock'];
//    $quantite=$_POST['quantite'];
//    $poidsPiece=$_POST['poids_piece'];
//    $descriptif=$_POST['descriptif'];
//}

$template = new Smarty();

switch ($action) {
    case 'ajout':
        $template->assign('isset_des', "");
        $template->assign('isset_price', "");
        $template->assign('isset_stock', "");

        if (isset($_POST['traitement'])) {
            $finalPost = [];
//$error = [];

            if (!isset($_POST['des']) || $_POST['des'] == "") {
                echo 'aucune designation saisie';
            } else {
                $template->assign('isset_des', $_POST['des']);
            }

            if (!isset($_POST['stock']) || $_POST['stock'] == "") {
                echo "<script type=\"text/javascript\">"
                . "alert('Stock non défini !!!!!!');</script>";
                echo "Stock non défini !";
            } else {
                $template->assign('isset_stock', $_POST['stock']);
                $finalPost['stock'] = $_POST['stock'];
            }
            if (!isset($_POST['price']) || $_POST['price'] == "") {
                echo "Aucune prix n'a été saisie !!!!!!";
            } else {
                $template->assign('isset_price', $_POST['price']);
            }


            if (isset($error)) {
                $template->assign('error', $error);
            } else {
                ajoutproduit('$reference, $des, $price, $stock, $quantity,'
                        . ' $weight, $description');
            }
        }

        $template->assign('msg', 'Liste de Produits');
        $template->assign('reference', 'reference');
        $template->assign('des', 'Designation');
        $template->assign('price', 'Prix unitaire ht');
        $template->assign('stock', 'stock');
        $template->assign('quantity', 'Quantite');
        $template->assign('weight', 'Poids piece');
        $template->assign('description', 'Description');

        $template->display('vue/ficheAjoutListe.tpl');
        break;


    case 'Consulter':


        //libelés
        $template->assign('msg', 'Consultation d\'un Produit');
        $template->assign('reference', 'reference :');
        $template->assign('des', 'Designation :');
        $template->assign('price', 'Prix unitaire ht :');
        $template->assign('stock', 'stock :');
        $template->assign('quantity', 'Quantite :');
        $template->assign('weight', 'Poids piece :');
        $template->assign('description', 'Description :');
        $template->assign('disabled', 'disabled');
        

//recuperation des valeur de la base de données
        $row = $idRequete->fetch();
        $reference = $row['reference'];
        $designation = $row['designation'];
        $prix = $row['prix_unitaire_ht'];
        $stock = $row['stock'];
        $quantite = $row['quantite'];
        $poidsPiece = $row['poids_piece'];
        $descriptif = $row['descriptif'];

//assignation des valeurs dans les input
        $template->assign('valreference', $reference);
        $template->assign('valdes', $designation);
        $template->assign('valprice', $prix);
        $template->assign('valstock', $stock);
        $template->assign('valquantity', $quantite);
        $template->assign('valweight', $poidsPiece);
        $template->assign('valdescription', $descriptif);
        $template->assign('action', $action);
        
        $template->display('vue/ficheConsultation.tpl');

        break;
    case 'Modifier':
        
                $template->assign('msg', 'Consultation d\'un Produit');
        $template->assign('reference', 'reference :');
        $template->assign('des', 'Designation :');
        $template->assign('price', 'Prix unitaire ht :');
        $template->assign('stock', 'stock :');
        $template->assign('quantity', 'Quantite :');
        $template->assign('weight', 'Poids piece :');
        $template->assign('description', 'Description :');
        $template->assign('disabled', '');
        $template->assign('hidden', 'hidden');
        
        
                $row = $idRequete->fetch();
                
        $reference = $row['reference'];
        $designation = $row['designation'];
        $prix = $row['prix_unitaire_ht'];
        $stock = $row['stock'];
        $quantite = $row['quantite'];
        $poidsPiece = $row['poids_piece'];
        $descriptif = $row['descriptif'];
        
                $template->assign('valreference', $reference);
        $template->assign('valdes', $designation);
        $template->assign('valprice', $prix);
        $template->assign('valstock', $stock);
        $template->assign('valquantity', $quantite);
        $template->assign('valweight', $poidsPiece);
        $template->assign('valdescription', $descriptif);
        $template->assign('action', $action);
        consultProduit($post);
        $template->display('vue/ficheConsultation.tpl');

        break;
    case 'Suprimer':

        break;
    case'rechercher':
        if (!isset($_POST['keyword']) || $_POST['keyword'] == "") {
                echo 'aucun champ saisie';
            } else {
        
       
$listeProduits = array();
$i = 0;
while ($row = $idRequete->fetch()){
    $listeProduits[$i]['reference'] = $row['reference'];
    $listeProduits[$i]['designation'] = $row['designation'];
    $listeProduits[$i]['prix'] = $row['prix_unitaire_ht'];
    $i++;
}
            }

$template->assign('msg', 'Liste de Recherche');
$template->assign('listeProduits', $listeProduits);
$template->display('vue/produitsearch.tpl');        
                
//        //libelés
//        $template->assign('msg', 'Consultation d\'un Produit');
//        $template->assign('reference', 'reference :');
//        $template->assign('des', 'Designation :');
//        $template->assign('price', 'Prix unitaire ht :');
//        $template->assign('stock', 'stock :');
//        $template->assign('quantity', 'Quantite :');
//        $template->assign('weight', 'Poids piece :');
//        $template->assign('description', 'Description :');
//        $template->assign('disabled', 'disabled');
//        
////recuperation des valeur de la base de données
//        $row = $idRequete->fetch();
//        $reference = $row['reference'];
//        $designation = $row['designation'];
//        $prix = $row['prix_unitaire_ht'];
//        $stock = $row['stock'];
//        $quantite = $row['quantite'];
//        $poidsPiece = $row['poids_piece'];
//        $descriptif = $row['descriptif'];
//
////assignation des valeurs dans les input
//        $template->assign('valreference', $reference);
//        $template->assign('valdes', $designation);
//        $template->assign('valprice', $prix);
//        $template->assign('valstock', $stock);
//        $template->assign('valquantity', $quantite);
//        $template->assign('valweight', $poidsPiece);
//        $template->assign('valdescription', $descriptif);
//                
//        $template->display('vue/produitsearch.tpl');}
        break;
    default :
        echo 'erreur';
}
?>


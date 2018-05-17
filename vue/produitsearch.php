<?php
require_once 'include/libs/Smarty.class.php';
    
$template = new Smarty();

if(isset($_POST['search']) && !empty($_POST)){
    
    $search = explode('',$_POST['search']);
    
    foreach ($search as $searche) {
        if(strlen($searche) >= 3){
            $like = "designation LIKE %".$searche."%";            
        }
        else{
            echo "Remplir le champ";
        }
    }
}
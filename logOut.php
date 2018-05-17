<?php
function logOut(){
if (isset($_POST['deco'])) {
    var_dump($_SESSION);
    $_SESSION = array();
    session_unset($_SESSION);
    echo 'Vous avez bien été deconnecté.';
}
}
?>


<?php
require_once 'include/connexion.php';
require_once 'include/infoConnexion.php';
require_once 'include/executeRequete.php';

$cnx = connexion(UTILISATEUR, MOTDEPASSE, SERVER, BASEDEDONNEE);

if (isset($_POST['valider'])) {
    $temp_log = $_POST['log'];
    $temp_mdp = $_POST['mdp'];
    $sql = "SELECT * FROM utilisateurs WHERE login ='$temp_log'";
    $idRequete = query1($cnx, $sql);
    if ($idRequete->rowCount() == 1) {
        $row = $idRequete->fetch(PDO::FETCH_NUM);
        $right = "tk!@";
        $left = "ar30&b%";
        $jeton = hash('ripemd128', "$left.$temp_mdp.$right");
        if ($jeton == $row[3]) {
            session_start();
            $_SESSION['login'] = $temp_log;
            $_SESSION['nom'] = $row[1];
            $_SESSION['prenom'] = $row[0];
            header('Location:index.php');
        } else {
            echo 'Mot de passe incorrecte';
        }
    } else {
        echo 'Loggin incorrecte';
    }
}
if (isset($_POST['deco'])) {
//    var_dump($_SESSION);
    $_SESSION = array();
    session_unset($_SESSION);
    echo 'Vous avez bien été deconnecté.';
}
?>

<!DOCTYPE>
<head>

</head>
<body>
    <form method="POST" action="authentification.php">
        Login : <input type="text" name="log" value="">
        Mot de passe : <input type="password" name="mdp" value="">
        <input type="submit" name="valider" value="Connexion">
        <input type="submit" name="deco" value="Deconnexion">
    </form>
</body>
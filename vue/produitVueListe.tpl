<!DOCTYPE html>

<html>
    <body>
        <h2>{$msg|upper}</h2>
        <form method="POST" action="authentification.php">
            <input type="submit" name="deco" value="Deconnexion">
            
        </form><br>
        <table> 

            <form method="POST" action="index.php">
                <td><input type="hidden" name="gestion" value="produit">
                    <input type="hidden" name="action" value="rechercher"></td>
                <td><input type="text" name="keyword" value="" placeholder="Recherche designation...">
                    <input type="submit" name="search" value="Rechercher">
                </td>
            </form>

            <tr>
                <th></th>
                <th>Nom produit</th>
                <th>Prix unitaire ht</th>
            </tr>
            <tr>
                {foreach from=$listeProduits item=produit}

                    <td>
                        <form method="POST" action="index.php">
                            <input type="text" name="" id="" 
                                   value="{$produit.reference}" hidden>
                        </form>
                    </td>
                    <td>{$produit.designation}</td>
                    <td>{$produit.prix}</td>
                    <td>
                        <form method="POST" action="index.php">
                            <input type="hidden" name="gestion" value="produit">
                            <input type="hidden" name="id" value="{$produit.reference}">
                            <input type='submit' name="consulter" 
                                   id='{$produit.reference}' value="Consulter">

                            <input type='submit' name="consulter" 
                                   id="{$produit.reference}" value="Modifier">
                            <input type="submit" name="suprimer" 
                                   id="{$produit.reference}" value="Supprimer" onclick="confirme()">
                        </form>
                    </td>
                </tr>
            {/foreach} 
        </table>
        <br/>
        <br/>
        <span>nombre d'enregistrements : {$nblig}</span>
        <br/>
        <form method="POST" action="index.php">
            Ajouter un produit:
            <input type="hidden" name="gestion" value="produit">
            <input type="hidden" name="action" value="ajout">
            <input type="submit" name="ajouter" id="ajouter" value="Ajouter">
        </form>
        <script type="text/javascript">
            function confirme() {
                if (confirm('Etes vous de vouloir le supprimer?')) {
                    alert('Element supprimé.');
                } else {
                    alert('Retour à la liste');
                }
            }
        </script>
    </body>
</html>


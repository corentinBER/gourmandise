<!DOCTYPE>
<html>
    <body>
        <h2>{$msg|upper}</h2>



{*        <form method="POST" action="index.php">
            <table>
                <tr>
                <th>{$reference}</th>
                    <td><input name="reference" value="{$valreference}" {$disabled}></td>
                </tr>
                <tr>
                    <th>{$des}</th>
                    <td><input name="des" value="{$valdes}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$price}</th>
                    <td><input name="price" type="text" value="{$valprice}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$stock}</th>
                    <td><input name="stock" type="text" value="{$valstock}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$quantity}</th>
                    <td><input id="g" type="text" name="quantity" 
                               value="{$valquantity}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$weight}</th>
                    <td><input type="text" name="weight" 
                               value="{$valweight}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$description}</th>
                    <td><input name="description" value="{$valdescription}" {$disabled}>                   
                    </td>
                </tr>  
            </table>
            <br>                    
            <input type="hidden" name="gestion" value="produit">
            <input type="submit" name="retour"  value="Retour">
        </form>*}
                <form method="POST" action="authentification.php">
            <input type="submit" name="deco" value="Deconnexion">
            
        </form><br>
        <table> 
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
        <a href="index.php">Accueil</a>
    </body>
</html>
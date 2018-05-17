<!DOCTYPE html>
<html>
    <h2>{$msg|upper}</h2>
    <table>   
        <tr>
            <td>
                <form method="" id="formajout" action="">
                    <input type="text" name="" id="" value="{$reference}"
                           hidden>
                </form>
            </td>
        </tr>
        <tr>
{*           {foreach from=$error item=err}
                {$err}<br>
            {/foreach}*}
        </tr>
        <form method="POST" action="index.php">
            <tr>
                <tr><th>{$des}</th>
                <td><input name="des" value="{$isset_des}"></td></tr>
                <tr><th>{$price}</th>
                <td><input name="price" type="number" step="0.01" 
                           value="{$isset_price}" required=""></td></tr>
                <tr><th>{$stock}</th>
                <td><input name="stock" type="number"  
                           value="{$isset_stock}" required=""></td></tr>
                <tr><th>{$quantity}</th>
                <td><input id="g" type="number" name="quantity" 
                                      value="0" onchange="crtInput(this)"></td></tr>
                <tr><th>{$weight}</th>
                <td><input id="p" type="number" name="weight" 
                                    value="0" onchange="crtInput(this)"></td></tr>
                <tr><th>{$description}</th>
                <td><select name="description" from="formajout" 
                                          onchange="thisSelected(this)">
                        <option value="G">Gramme</option>
                        <option value="P">Pièce</option>
                    </select></td></tr>
                </td>
            </tr>
            </tr>    
                <td>
                    <br>
                    <input type="hidden" name="action" value="validerajout">
                    <input type="hidden" name="gestion" value="produit">
                    <input type="submit" name="valider" value="Envoyer">
                </td>
            </tr>
        </form>
        <tr><td><a href="index.php">Accueil</a></td></tr>
    </table>
    <script type="text/javascript">
        document.getElementById('p').readOnly = true;
        
        function thisSelected(val){
            var myOption = val.options[val.selectedIndex].value;
            if(myOption == 'Gramme'){
                document.getElementById('p').readOnly = true;
                document.getElementById('g').readOnly = false;
            }else{
                document.getElementById('g').readOnly = false;
                document.getElementById('p').readOnly = false;
            }
        }
        function crtInput(petg){
            var eulav = petg.value;
            eulav = parseInt(eulav);
            if(eulav <= 0){
                alert('Veuillez entrez une valeur supérieur à 0 parce que\n\
     c\'est bien joli de vouloir remplir un formulaire mais là faut \n\
pas déconner non plus !')
            }     
    }
    </script>
</html>


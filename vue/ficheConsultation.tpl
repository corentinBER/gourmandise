<!DOCTYPE>
<html>
    <body>
        <h2>{$msg|upper}</h2>



        <form method="POST" action="index.php">
            <table>
                <tr>
                <th>{$reference}</th>
                    {if $action eq 'Modifier'}<td><input name="reference" value="{$valreference}" {$disabled}></td>{/if}
                </tr>
                <tr>
                    <th>{$des}</th>
                    <td><input name="des" value="{$valdes}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$price}</th>
                    <td><input name="price" type="number" step="0.01" 
                               value="{$valprice}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$stock}</th>
                    <td><input name="stock" type="number"  
                               value="{$valstock}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$quantity}</th>
                    <td><input id="g" type="number" name="quantity" 
                               value="{$valquantity}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$weight}</th>
                    <td><input type="text" name="weight" 
                               value="{$valweight}" {$disabled}></td>
                </tr>  
                <tr>
                    <th>{$description}</th>
                    <td><select name="description" from="formajout" 
                                          {$disabled} onchange="thisSelected(this)">
                        <option value="G">Gramme</option>
                        <option value="P">Pièce</option>
                    </select></td>
                </tr>  
            </table>
            <br>                    
       
            <input type="hidden" name="gestion" value="produit">
            {if $action eq 'Modifier'} <input type="submit" name="modifier"  value="Modifier">{/if}
            <input type="submit" name="retour"  value="Retour">
        </form>
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
    </body>
</html>
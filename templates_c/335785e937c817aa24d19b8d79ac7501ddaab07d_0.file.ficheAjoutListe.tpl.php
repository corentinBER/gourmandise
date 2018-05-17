<?php
/* Smarty version 3.1.29, created on 2017-02-15 16:18:08
  from "C:\Wamp64\www\gourmandise\vue\ficheAjoutListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a47f40ba0093_67251393',
  'file_dependency' => 
  array (
    '335785e937c817aa24d19b8d79ac7501ddaab07d' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\vue\\ficheAjoutListe.tpl',
      1 => 1487175485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a47f40ba0093_67251393 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value, 'UTF-8');?>
</h2>
    <table>   
        <tr>
            <td>
                <form method="" id="formajout" action="">
                    <input type="text" name="" id="" value="<?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
"
                           hidden>
                </form>
            </td>
        </tr>
        <tr>

        </tr>
        <form method="POST" action="index.php">
            <tr>
                <tr><th><?php echo $_smarty_tpl->tpl_vars['des']->value;?>
</th>
                <td><input name="des" value="<?php echo $_smarty_tpl->tpl_vars['isset_des']->value;?>
"></td></tr>
                <tr><th><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</th>
                <td><input name="price" type="number" step="0.01" 
                           value="<?php echo $_smarty_tpl->tpl_vars['isset_price']->value;?>
" required=""></td></tr>
                <tr><th><?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</th>
                <td><input name="stock" type="number"  
                           value="<?php echo $_smarty_tpl->tpl_vars['isset_stock']->value;?>
" required=""></td></tr>
                <tr><th><?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
</th>
                <td><input id="g" type="number" name="quantity" 
                                      value="0" onchange="crtInput(this)"></td></tr>
                <tr><th><?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
</th>
                <td><input id="p" type="number" name="weight" 
                                    value="0" onchange="crtInput(this)"></td></tr>
                <tr><th><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</th>
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
    <?php echo '<script'; ?>
 type="text/javascript">
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
    <?php echo '</script'; ?>
>
</html>

<?php }
}

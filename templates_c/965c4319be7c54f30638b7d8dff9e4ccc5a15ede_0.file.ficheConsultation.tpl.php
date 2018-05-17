<?php
/* Smarty version 3.1.29, created on 2017-02-15 10:05:35
  from "C:\Wamp64\www\gourmandise\vue\ficheConsultation.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a427ef729804_19098920',
  'file_dependency' => 
  array (
    '965c4319be7c54f30638b7d8dff9e4ccc5a15ede' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\vue\\ficheConsultation.tpl',
      1 => 1487153132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a427ef729804_19098920 ($_smarty_tpl) {
?>
<!DOCTYPE>
<html>
    <body>
        <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value, 'UTF-8');?>
</h2>



        <form method="POST" action="index.php">
            <table>
                <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</th>
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'Modifier') {?><td><input name="reference" value="<?php echo $_smarty_tpl->tpl_vars['valreference']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
></td><?php }?>
                </tr>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['des']->value;?>
</th>
                    <td><input name="des" value="<?php echo $_smarty_tpl->tpl_vars['valdes']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
></td>
                </tr>  
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</th>
                    <td><input name="price" type="number" step="0.01" 
                               value="<?php echo $_smarty_tpl->tpl_vars['valprice']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
></td>
                </tr>  
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
</th>
                    <td><input name="stock" type="number"  
                               value="<?php echo $_smarty_tpl->tpl_vars['valstock']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
></td>
                </tr>  
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
</th>
                    <td><input id="g" type="number" name="quantity" 
                               value="<?php echo $_smarty_tpl->tpl_vars['valquantity']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
></td>
                </tr>  
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
</th>
                    <td><input type="text" name="weight" 
                               value="<?php echo $_smarty_tpl->tpl_vars['valweight']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
></td>
                </tr>  
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</th>
                    <td><select name="description" from="formajout" 
                                          <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 onchange="thisSelected(this)">
                        <option value="G">Gramme</option>
                        <option value="P">Pièce</option>
                    </select></td>
                </tr>  
            </table>
            <br>                    
       
            <input type="hidden" name="gestion" value="produit">
            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'Modifier') {?> <input type="submit" name="modifier"  value="Modifier"><?php }?>
            <input type="submit" name="retour"  value="Retour">
        </form>
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
    </body>
</html><?php }
}

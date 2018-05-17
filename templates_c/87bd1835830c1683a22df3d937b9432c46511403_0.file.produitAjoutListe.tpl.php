<?php
/* Smarty version 3.1.29, created on 2017-02-02 10:42:48
  from "C:\Wamp64\www\gourmandise\vue\produitAjoutListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58930d286b6cc3_56186411',
  'file_dependency' => 
  array (
    '87bd1835830c1683a22df3d937b9432c46511403' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\vue\\produitAjoutListe.tpl',
      1 => 1486032165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58930d286b6cc3_56186411 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value, 'UTF-8');?>
</h2>
    <table>   
<!--        <tr>
            
            <th><?php echo $_smarty_tpl->tpl_vars['colone']->value;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['coltwo']->value;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['colthree']->value;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['colfour']->value;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['colfive']->value;?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['colsix']->value;?>
</th>
        </tr>-->
        <tr>
            <td>
                <form method="" id="formajout" action="">
                    <input type="text" name="" id="" value="<?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
" hidden>
                </form>
            </td>
        </tr>
        <tr>
            <td>        
                <form>   
                    <?php echo $_smarty_tpl->tpl_vars['des']->value;?>
<input name="des" value="">
                    <?php echo $_smarty_tpl->tpl_vars['price']->value;?>
<input name="price" value="">
                    <?php echo $_smarty_tpl->tpl_vars['stock']->value;?>
<input name="stock" value="">
                    <?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
<input name="quantity" value="">
                    <?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
<input name="weight" value="">
                    <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
<select name="description" from="formajout" value="">
                        <option value="G">G</option>
                        <option value="P">P</option>
                    </select>
                        
                </form>               
            </td>  
        </tr>
    </table>
                <form>
            <input type="submit" name="" value="Ajouter">
        </form>
</html>

<?php }
}

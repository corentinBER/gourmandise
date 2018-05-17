<?php
/* Smarty version 3.1.29, created on 2017-02-15 16:33:54
  from "C:\Wamp64\www\gourmandise\vue\produitsearch.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a482f2e3c299_51163198',
  'file_dependency' => 
  array (
    '8ef01b98b8e5de73a5d173ac1558cb168117b253' => 
    array (
      0 => 'C:\\Wamp64\\www\\gourmandise\\vue\\produitsearch.tpl',
      1 => 1487176433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a482f2e3c299_51163198 ($_smarty_tpl) {
?>
<!DOCTYPE>
<html>
    <body>
        <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value, 'UTF-8');?>
</h2>




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
                <?php
$_from = $_smarty_tpl->tpl_vars['listeProduits']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_produit_0_saved_item = isset($_smarty_tpl->tpl_vars['produit']) ? $_smarty_tpl->tpl_vars['produit'] : false;
$_smarty_tpl->tpl_vars['produit'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['produit']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->_loop = true;
$__foreach_produit_0_saved_local_item = $_smarty_tpl->tpl_vars['produit'];
?>

                    <td>
                        <form method="POST" action="index.php">
                            <input type="text" name="" id="" 
                                   value="<?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>
" hidden>
                        </form>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['designation'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['prix'];?>
</td>
                    <td>
                        <form method="POST" action="index.php">
                            <input type="hidden" name="gestion" value="produit">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>
">
                            <input type='submit' name="consulter" 
                                   id='<?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>
' value="Consulter">

                            <input type='submit' name="consulter" 
                                   id="<?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>
" value="Modifier">
                            <input type="submit" name="suprimer" 
                                   id="<?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>
" value="Supprimer" onclick="confirme()">
                        </form>
                    </td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars['produit'] = $__foreach_produit_0_saved_local_item;
}
if ($__foreach_produit_0_saved_item) {
$_smarty_tpl->tpl_vars['produit'] = $__foreach_produit_0_saved_item;
}
?> 
        </table>
        <a href="index.php">Accueil</a>
    </body>
</html><?php }
}

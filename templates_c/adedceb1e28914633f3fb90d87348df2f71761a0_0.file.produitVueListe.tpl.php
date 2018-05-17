<?php
/* Smarty version 3.1.29, created on 2017-02-16 16:32:19
  from "C:\wamp64\www\gourmandisesarl\gourmandise\vue\produitVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a5d4130909e7_49626446',
  'file_dependency' => 
  array (
    'adedceb1e28914633f3fb90d87348df2f71761a0' => 
    array (
      0 => 'C:\\wamp64\\www\\gourmandisesarl\\gourmandise\\vue\\produitVueListe.tpl',
      1 => 1487152696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a5d4130909e7_49626446 ($_smarty_tpl) {
?>
<!DOCTYPE html>

<html>
    <body>
        <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['msg']->value, 'UTF-8');?>
</h2>
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
        <br/>
        <br/>
        <span>nombre d'enregistrements : <?php echo $_smarty_tpl->tpl_vars['nblig']->value;?>
</span>
        <br/>
        <form method="POST" action="index.php">
            Ajouter un produit:
            <input type="hidden" name="gestion" value="produit">
            <input type="hidden" name="action" value="ajout">
            <input type="submit" name="ajouter" id="ajouter" value="Ajouter">
        </form>
        <?php echo '<script'; ?>
 type="text/javascript">
            function confirme() {
                if (confirm('Etes vous de vouloir le supprimer?')) {
                    alert('Element supprimé.');
                } else {
                    alert('Retour à la liste');
                }
            }
        <?php echo '</script'; ?>
>
    </body>
</html>

<?php }
}

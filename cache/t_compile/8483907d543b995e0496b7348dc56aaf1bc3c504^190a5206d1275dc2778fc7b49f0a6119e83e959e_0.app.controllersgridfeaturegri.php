<?php
/* Smarty version 3.1.33, created on 2023-07-05 16:11:42
  from 'app:controllersgridfeaturegri' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_64a5963e77f621_81645313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '190a5206d1275dc2778fc7b49f0a6119e83e959e' => 
    array (
      0 => 'app:controllersgridfeaturegri',
      1 => 1688488389,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a5963e77f621_81645313 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="gridPaging">
	<div class="gridItemsPerPage">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.itemsPerPage"),$_smarty_tpl ) );?>
:<select class="itemsPerPage"></select>
	</div>
	<div class="gridPages">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_info'][0], array( array('iterator'=>$_smarty_tpl->tpl_vars['iterator']->value,'itemsPerPage'=>$_smarty_tpl->tpl_vars['currentItemsPerPage']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['page_links'][0], array( array('name'=>$_smarty_tpl->tpl_vars['grid']->value->getId(),'iterator'=>$_smarty_tpl->tpl_vars['iterator']->value),$_smarty_tpl ) );?>

	</div>
</div>
<?php }
}

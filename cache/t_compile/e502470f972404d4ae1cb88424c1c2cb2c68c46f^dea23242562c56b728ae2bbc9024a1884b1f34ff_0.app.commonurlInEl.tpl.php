<?php
/* Smarty version 3.1.33, created on 2023-06-26 19:00:21
  from 'app:commonurlInEl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6499e045c1ed76_78680213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea23242562c56b728ae2bbc9024a1884b1f34ff' => 
    array (
      0 => 'app:commonurlInEl.tpl',
      1 => 1575681981,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6499e045c1ed76_78680213 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	// Initialise JS handler.
	$(function() {
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inElElId']->value,"js" ));?>
').pkpHandler(
			'$.pkp.controllers.UrlInDivHandler',
			{
				sourceUrl: <?php echo json_encode($_smarty_tpl->tpl_vars['inElUrl']->value);?>
,
				refreshOn: <?php echo json_encode($_smarty_tpl->tpl_vars['refreshOn']->value);?>

			}
		);
	});
<?php echo '</script'; ?>
>

<<?php echo $_smarty_tpl->tpl_vars['inEl']->value;?>
 id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inElElId']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['inElClass']->value) {?> class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inElClass']->value ));?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['inElPlaceholder']->value;?>
</<?php echo $_smarty_tpl->tpl_vars['inEl']->value;?>
>
<?php }
}

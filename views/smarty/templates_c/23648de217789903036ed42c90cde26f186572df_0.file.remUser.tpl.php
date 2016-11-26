<?php
/* Smarty version 3.1.30, created on 2016-11-25 17:51:56
  from "/var/www/html/daw/views/smarty/templates/backoffice/remUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58386c2c62faf9_23590755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23648de217789903036ed42c90cde26f186572df' => 
    array (
      0 => '/var/www/html/daw/views/smarty/templates/backoffice/remUser.tpl',
      1 => 1480092714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58386c2c62faf9_23590755 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="body">
		<table class="table table-striped">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>User Type</th>
			<th>Remove</th>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['user']->value['type'];?>
</td>
					<td><a class="glyphicon glyphicon-remove" href="actions/remUser.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></a></td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
	</div><?php }
}

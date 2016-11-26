<?php
/* Smarty version 3.1.30, created on 2016-11-26 15:52:54
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/remUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839a1c6a77005_82837266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b2542a468d5c1a08e1cffd5edcc984f1eaa953e' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/remUser.tpl',
      1 => 1480158430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839a1c6a77005_82837266 (Smarty_Internal_Template $_smarty_tpl) {
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

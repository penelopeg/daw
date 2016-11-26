<?php
/* Smarty version 3.1.30, created on 2016-11-26 15:53:17
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/clients.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839a1ddd2f334_89652286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba796991d136bcad86e25183a2cf3cdeb965fd96' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/clients.tpl',
      1 => 1480158430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839a1ddd2f334_89652286 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="body">
		<table class="table table-striped">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>City</th>
			<th>Country</th>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['client']->value['firstname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['client']->value['lastname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['client']->value['address'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['client']->value['city_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['client']->value['country_name'];?>
</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
	</div><?php }
}

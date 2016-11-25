<?php
/* Smarty version 3.1.30, created on 2016-11-25 15:46:39
  from "/var/www/html/ecommerce_daw/views/smarty/templates/my_orders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58384ecf4dc289_43864696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf5550650376dda5e640407436b59965340f46c' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/my_orders.tpl',
      1 => 1480085197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58384ecf4dc289_43864696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>Order Ref.</th>
			<th>Date</th>
			<th>Status</th>
		</tr>
	</thead>   
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['order_date'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['order']['status_id'] == 1) {?>
				<td><span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['status'];?>
</span></td>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['order']['status_id'] == 2) {?>
				<td><span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['status'];?>
</span></td>
			<?php } elseif ($_smarty_tpl->tpl_vars['data']->value['order']['status_id'] == 3) {?>
				<td><span class="label label-important"><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['status'];?>
</span></td>
			<?php } else { ?>
				<td><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['status'];?>
</span></td>
			<?php }?>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table><?php }
}

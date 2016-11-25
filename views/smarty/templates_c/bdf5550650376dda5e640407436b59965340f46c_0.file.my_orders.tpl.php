<?php
/* Smarty version 3.1.30, created on 2016-11-25 17:17:14
  from "/var/www/html/ecommerce_daw/views/smarty/templates/my_orders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838640aa1eb53_00288996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf5550650376dda5e640407436b59965340f46c' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/my_orders.tpl',
      1 => 1480090632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5838640aa1eb53_00288996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-striped table-condensed tableCollapse">
	<thead>
		<tr>
			<th>Order Ref.</th>
			<th>Date</th>
			<th>Total</th>
			<th>Status</th>
		</tr>
	</thead>   
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
		<tr data-toggle="collapse" data-target=".<?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
" class="accordion-toggle">
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['order_date'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['total'];?>
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
		<tr>
			<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><i>Name</i></div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><i>Quantity</i></div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><i>Price</i></div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><i>Total</i></div> </td>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
		<tr>
			<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['price_total'];?>
</div> </td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tbody>
</table>
<?php }
}

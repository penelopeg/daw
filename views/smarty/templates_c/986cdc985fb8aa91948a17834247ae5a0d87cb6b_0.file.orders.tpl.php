<?php
/* Smarty version 3.1.30, created on 2016-11-26 18:28:33
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/orders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839c641727374_95522941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '986cdc985fb8aa91948a17834247ae5a0d87cb6b' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/orders.tpl',
      1 => 1480181310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839c641727374_95522941 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="body">
	<table class="table table-condensed tableCollapse">
		<thead>
			<tr>
				<th>Order Ref.</th>
				<th>Client name</th>
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
" class="accordion-toggle clickable-row">
				<td class="orderid"><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['data']->value['client']['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['client']['lastname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['order_date'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['data']->value['order']['total'];?>
</td>
				<td>
					<select name="status" class="status">	
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value, 'status_data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status_data']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['status_data']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['order']['status_id']) {?>
						<option value='<?php echo $_smarty_tpl->tpl_vars['status_data']->value['id'];?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['status_data']->value['status'];?>
</option>
						<?php } else { ?>
						<option value='<?php echo $_smarty_tpl->tpl_vars['status_data']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['status_data']->value['status'];?>
</option>
						<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
				</td>
			</tr>
			<tr>
				<td class="hiddenRow"><div class="accordian-body collapse <?php echo $_smarty_tpl->tpl_vars['data']->value['order']['id'];?>
"><i>Product Ref.</i></div> </td>
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
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
</div> </td>
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
</div><?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-11-27 14:03:29
  from "/var/www/html/ecommerce_daw/views/smarty/templates/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583ad9a1c03a48_39657412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fcede3275de2b886894c6c29197545960558048' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/cart.tpl',
      1 => 1480251806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_583ad9a1c03a48_39657412 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Navigation menu -->
		<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field1'=>$_smarty_tpl->tpl_vars['field1']->value,'product_categories'=>$_smarty_tpl->tpl_vars['product_categories']->value,'usermenu'=>$_smarty_tpl->tpl_vars['usermenu']->value), 0, false);
?>
		
		</div>
	</div>
</div>
<div class="container margintop">
	<div class="row">
		<div class="col-sm-12 col-md-10 col-md-offset-1 links">
			<div id="removed"></div>
			<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
			<h2><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
			<?php }?>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Product</th>
						<th>Quantity</th>
						<th class="text-center">Price</th>
						<th class="text-center">Total</th>
						<th> </th>
					</tr>
				</thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
					<tr>
						<td class="col-md-6">
							<div class="media">
								<a class="thumbnail pull-left" href="index.php?page=details&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"> <img class="media-object" src="imgs/<?php echo $_smarty_tpl->tpl_vars['product']->value['image_url'];?>
" style="width: 72px; height: 72px;"> </a>
								<div class="media-body">
									<h4 class="media-heading"><a href="index.php?page=details&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></h4>
								</div>
							</div>
						</td>
						<td class="col-md-1" style="text-align: center">
							<input type="number" class="form-control change-quantity" id="quantity" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
">
						</td>
						<td class="col-md-1 text-center"><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
€</strong></td>
						<td class="col-md-1 text-center"><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['total'];?>
€</strong></td>
						<td class="col-md-1">
							<div class="product-id hidden"><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</div>
							<button type="button" class="btn btn-danger removecart">
								<span class="glyphicon glyphicon-remove"></span> Remove
							</button></td>
					</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<tr>
						<td>   </td>
						<td>   </td>
						<td>   </td>
						<td><h3>Total</h3></td>
						<td class="text-right"><h3><strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
€</strong></h3></td>
					</tr>
					<tr>
						<td>   </td>
						<td>   </td>
						<td>   </td>
						<td>
							<button onclick="location.href='index.php?page=shop';" type="button" class="btn btn-default">
								<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
							</button>
						</td>
						<td>
							<button onclick="location.href='index.php?page=order';" type="button" class="btn btn-success">
								Checkout <span class="glyphicon glyphicon-play"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- footer -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

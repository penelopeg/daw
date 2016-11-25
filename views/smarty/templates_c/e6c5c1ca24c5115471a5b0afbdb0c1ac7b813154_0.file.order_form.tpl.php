<?php
/* Smarty version 3.1.30, created on 2016-11-25 17:19:10
  from "/var/www/html/ecommerce_daw/views/smarty/templates/order_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838647e999e01_22673160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c5c1ca24c5115471a5b0afbdb0c1ac7b813154' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/order_form.tpl',
      1 => 1480081235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5838647e999e01_22673160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Geekin Out</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-12">
				<!-- Navigation menu -->
				<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field1'=>$_smarty_tpl->tpl_vars['field1']->value,'product_categories'=>$_smarty_tpl->tpl_vars['product_categories']->value,'usermenu'=>$_smarty_tpl->tpl_vars['usermenu']->value), 0, false);
?>

			</div>
		</div>
		<section class="container margintop">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 id="title">Your Order</h2>
					<form method="post" action="controllers/order_action.php">
						<div class="col-md-6">
							<h3 id="title">Your Information</h3>
							<input type="number" class="hidden" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
"/>
							<div class="form-group">
								<label for="firstname">First Name:</label>
								<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input your first name" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
" required/>
							</div>
							<div class="form-group">
								<label for="lastname">Last Name:</label>
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Input your last name" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
" required/>
							</div>
							<div class="form-group">
								<label for="address">Address:</label>
								<input type="text" class="form-control" id="address" name="address" placeholder="Input your address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" required/>
							</div>
							<div class="form-group">
								<label for="city">City:</label>
								<select name="city">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cities']->value, 'city');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['city']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['city']->value['id'] == $_smarty_tpl->tpl_vars['city_id']->value) {?>
									<option value='<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['city']->value['city_name'];?>
</option>
									<?php } else { ?>
									<option value='<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['city']->value['city_name'];?>
</option>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
							</div>
							<div class="form-group">
								<label for="country">Country:</label>
								<select name="country">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['country']->value['id'] == $_smarty_tpl->tpl_vars['country_id']->value) {?>
									<option value='<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
									<?php } else { ?>
									<option value='<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</select>
							</div>
							<div class="form-group">
								<label for="payment_info">Credit card number:</label>
								<input type="text" class="form-control" id="payment_info" name="payment_info" placeholder="Input your payment information" value="<?php echo $_smarty_tpl->tpl_vars['payment_info']->value;?>
" required/>
							</div>
							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6"><input type="submit" value="Order" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
							</div>
						</div>
						<div class="col-md-6">
							<h3 id="title">Your Products</h3>
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
										<td class="col-md-10">
											<div class="media">
												<a class="thumbnail pull-left" href="#"> <img class="media-object" src="imgs/<?php echo $_smarty_tpl->tpl_vars['product']->value['image_url'];?>
" style="width: 72px; height: 72px;"> </a>
												<div class="media-body">
													<h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h4>
												</div>
											</div>
										</td>
										<input type="number" class="hidden" name="quant[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
"/>
										<input type="number" class="hidden" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"/>
										<td class="col-md-1 text-center"><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</strong></td>
										<td class="col-md-1 text-center"><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
€</strong></td>
										<td class="col-md-1 text-center"><strong><?php echo $_smarty_tpl->tpl_vars['product']->value['total'];?>
€</strong></td>
										<td class='col-md-1 text-center'></td>
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
								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
	<!-- footer -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

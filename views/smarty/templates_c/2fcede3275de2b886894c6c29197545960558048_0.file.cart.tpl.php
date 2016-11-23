<?php
/* Smarty version 3.1.30, created on 2016-11-23 16:20:26
  from "/var/www/html/ecommerce_daw/views/smarty/templates/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835b3ba51e597_07329883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fcede3275de2b886894c6c29197545960558048' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/cart.tpl',
      1 => 1479914424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5835b3ba51e597_07329883 (Smarty_Internal_Template $_smarty_tpl) {
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- Navigation menu -->
				<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field1'=>$_smarty_tpl->tpl_vars['field1']->value), 0, false);
?>

				
			</div>
		</div>
	</div>
	<div class="container margintop">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
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
						<tr>
							<td class="col-sm-8 col-md-6">
								<div class="media">
									<a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
									<div class="media-body">
										<h4 class="media-heading"><a href="#">Product name</a></h4>
										<span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
									</div>
								</div>
							</td>
							<td class="col-sm-1 col-md-1" style="text-align: center">
								<input type="email" class="form-control" id="exampleInputEmail1" value="3">
							</td>
							<td class="col-sm-1 col-md-1 text-center"><strong>$4.87</strong></td>
							<td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
							<td class="col-sm-1 col-md-1">
								<button type="button" class="btn btn-danger">
									<span class="glyphicon glyphicon-remove"></span> Remove
								</button>
							</td>
						</tr>
						<tr>
							<td class="col-md-6">
								<div class="media">
									<a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
									<div class="media-body">
										<h4 class="media-heading"><a href="#">Product name</a></h4>
										<span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
									</div>
								</div>
							</td>
							<td class="col-md-1" style="text-align: center">
								<input type="email" class="form-control" id="exampleInputEmail1" value="2">
							</td>
							<td class="col-md-1 text-center"><strong>$4.99</strong></td>
							<td class="col-md-1 text-center"><strong>$9.98</strong></td>
							<td class="col-md-1">
								<button type="button" class="btn btn-danger">
									<span class="glyphicon glyphicon-remove"></span> Remove
								</button></td>
						</tr>
						<tr>
							<td>   </td>
							<td>   </td>
							<td>   </td>
							<td><h5>Subtotal</h5></td>
							<td class="text-right"><h5><strong>$24.59</strong></h5></td>
						</tr>
						<tr>
							<td>   </td>
							<td>   </td>
							<td>   </td>
							<td><h5>Estimated shipping</h5></td>
							<td class="text-right"><h5><strong>$6.94</strong></h5></td>
						</tr>
						<tr>
							<td>   </td>
							<td>   </td>
							<td>   </td>
							<td><h3>Total</h3></td>
							<td class="text-right"><h3><strong>$31.53</strong></h3></td>
						</tr>
						<tr>
							<td>   </td>
							<td>   </td>
							<td>   </td>
							<td>
								<button type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
								</button></td>
								<td>
									<button type="button" class="btn btn-success">
										Checkout <span class="glyphicon glyphicon-play"></span>
									</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- footer -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

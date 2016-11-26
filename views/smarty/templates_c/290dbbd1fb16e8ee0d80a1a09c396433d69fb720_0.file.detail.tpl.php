<?php
/* Smarty version 3.1.30, created on 2016-11-26 14:18:01
  from "/var/www/html/ecommerce_daw/views/smarty/templates/detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58398b89ed4417_17787375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '290dbbd1fb16e8ee0d80a1a09c396433d69fb720' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/detail.tpl',
      1 => 1480166244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58398b89ed4417_17787375 (Smarty_Internal_Template $_smarty_tpl) {
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
			<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field1'=>$_smarty_tpl->tpl_vars['field1']->value,'product_categories'=>$_smarty_tpl->tpl_vars['product_categories']->value,'usermenu'=>$_smarty_tpl->tpl_vars['usermenu']->value), 0, false);
?>

				
			</div>
		</div>
	</div>
	<section class="container margintop">
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="added" class="has-success animated fadeInUp"></div>
				<h3>
					<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

				</h3>
				<div class="row">
					<div class="col-md-8">
						<img class="detail" alt="Bootstrap Image Preview" src="imgs/<?php echo $_smarty_tpl->tpl_vars['product']->value['image_url'];?>
"/>
					</div>
					<div class="col-md-4">
						<p>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>

						</p>
						<h3>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
€
						</h3>
						<div class="product-id hidden"><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</div>
						<select class="quant">
							<option value='1'>1</option>
							<option value='2'>2</option>
							<option value='3'>3</option>
							<option value='4'>4</option>
							<option value='5'>5</option>
							<option value='6'>6</option>
							<option value='7'>7</option>
							<option value='8'>8</option>
							<option value='9'>9</option>
							<option value='10'>10</option>
						</select>
						<button type="button" class="addcart btn btn-default">
							Add to Cart
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

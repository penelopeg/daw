<?php
/* Smarty version 3.1.30, created on 2016-11-15 11:12:17
  from "/var/www/html/ecommerce_daw/smarty/templates/detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582adf819a3675_00817880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b486a1ba163d40741606eb16ad031f0585cbecc' => 
    array (
      0 => '/var/www/html/ecommerce_daw/smarty/templates/detail.tpl',
      1 => 1478977467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_582adf819a3675_00817880 (Smarty_Internal_Template $_smarty_tpl) {
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
				<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<h3>
					This is a product
				</h3>
				<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
				<p>
				Description blablbalbalbal.
				</p>
			</div>
			<div class="col-md-4">
				<h3>
					50,00€
				</h3>
				<select>
					<option value='1'>1</option>
					<option value='1'>2</option>
					<option value='1'>3</option>
					<option value='1'>4</option>
				</select>
				<button type="button" class="btn btn-default">
					Add to Cart
				</button>
			</div>
		</div>
	</div>
		<!-- footer -->
		<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-11-12 13:12:20
  from "/var/www/html/ecommerce_daw/smarty/templates/shop.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582707240fcbb6_63040532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4feb13deeadd9399a0c24e1e731f69c129e05a3' => 
    array (
      0 => '/var/www/html/ecommerce_daw/smarty/templates/shop.tpl',
      1 => 1478952722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_582707240fcbb6_63040532 (Smarty_Internal_Template $_smarty_tpl) {
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

			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg">
						<div class="caption">
							<h4 class="pull-right">€50.00</h4>
							<h4 class="text-primary">Cadeira</h4>
							<p> description </p>
							<p>
								<a class="btn btn-primary" href="#">Details</a>
								<a href="#"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"/> </a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg">
						<div class="caption">
							<h4 class="pull-right">€50.00</h4>
							<h4 class="text-primary">Cadeira</h4>
							<p> description </p>
							<p>
								<a class="btn btn-primary" href="#">Details</a>
								<a href="#"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"/> </a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg">
						<div class="caption">
							<h4 class="pull-right">€50.00</h4>
							<h4 class="text-primary">Cadeira</h4>
							<p> description </p>
							<p>
								<a class="btn btn-primary" href="#">Details</a>
								<a href="#"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"/> </a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<!-- footer -->
		<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
}

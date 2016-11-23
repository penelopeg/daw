<?php
/* Smarty version 3.1.30, created on 2016-11-23 12:40:05
  from "/var/www/html/ecommerce_daw/views/smarty/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835801541b125_21174204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b082d58f3f0abab18256e1ff79bb9f5850e6387' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/index.tpl',
      1 => 1479900863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5835801541b125_21174204 (Smarty_Internal_Template $_smarty_tpl) {
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
			<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field1'=>$_smarty_tpl->tpl_vars['field1']->value,'product_categories'=>$_smarty_tpl->tpl_vars['product_categories']->value), 0, false);
?>


			<div class="carousel slide margintop" id="carousel-173855">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-173855">
					</li>
					<li data-slide-to="1" data-target="#carousel-173855">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="imgs/slider/holiday.jpg">
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="imgs/slider/lights.jpg">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-173855" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-173855" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<div class="row margintop">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?> 
					<div class="col-md-4">
						<div class="thumbnail">
							<img class="ratio img-thumbnail" alt="Bootstrap Thumbnail First" src="imgs/<?php echo $_smarty_tpl->tpl_vars['product']->value['image_url'];?>
">
							<div class="caption">
								<h4 class="pull-right"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
€</h4>
								<h4 class="text-primary"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h4>
								<!--<p> <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
 </p>-->
								<p>
									<a class="btn btn-primary" href="index.php?page=details&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">Details</a>
									<a href="#"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"/> </a>
								</p>
							</div>
						</div>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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

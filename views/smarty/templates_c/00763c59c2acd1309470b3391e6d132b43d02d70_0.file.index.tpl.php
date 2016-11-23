<?php
/* Smarty version 3.1.30, created on 2016-11-05 20:27:43
  from "C:\inetpub\wwwroot\ecommerce_daw\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581e168f758298_72444930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00763c59c2acd1309470b3391e6d132b43d02d70' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\ecommerce_daw\\smarty\\templates\\index.tpl',
      1 => 1478366658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_581e168f758298_72444930 (Smarty_Internal_Template $_smarty_tpl) {
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


			<div class="carousel slide" id="carousel-173855">
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

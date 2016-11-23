<?php
/* Smarty version 3.1.30, created on 2016-11-23 13:10:09
  from "/var/www/html/ecommerce_daw/views/smarty/templates/shop.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583587215a54a3_50103863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7c9aad4dba241155713e5f3a40fb4b8cbcae426' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/shop.tpl',
      1 => 1479902994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_583587215a54a3_50103863 (Smarty_Internal_Template $_smarty_tpl) {
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
			<div class="row margintop">
				<div class="col-md-12">
					<?php if (isset($_smarty_tpl->tpl_vars['noresults']->value)) {?>
						<h3><?php echo $_smarty_tpl->tpl_vars['noresults']->value;?>
</h3>
					<?php }?>
				</div>
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
	<!-- footer -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

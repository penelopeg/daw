<?php
/* Smarty version 3.1.30, created on 2016-11-25 14:39:47
  from "/var/www/html/ecommerce_daw/views/smarty/templates/shop.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58383f236d10d2_54242670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7c9aad4dba241155713e5f3a40fb4b8cbcae426' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/shop.tpl',
      1 => 1480081158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58383f236d10d2_54242670 (Smarty_Internal_Template $_smarty_tpl) {
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
			<div class="row margintop">
				<?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
				<div><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
				<?php }?>
				<div class="col-md-12">
					<?php if (isset($_smarty_tpl->tpl_vars['noresults']->value)) {?>
					<h3><?php echo $_smarty_tpl->tpl_vars['noresults']->value;?>
</h3>
					<?php }?>
				</div>
				<div id="added" class="has-success animated fadeInUp"></div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?> 
				<div class="col-md-3">
					<div class="product-item">
						<div class="pi-img-wrapper">
							<img src="imgs/<?php echo $_smarty_tpl->tpl_vars['product']->value['image_url'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
							<div>
								<a href="index.php?page=details&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" class="btn">Details</a>
							</div>
						</div>
						<h3><a href="index.php?page=details&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></h3>
						<div class="pi-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
€</div>
						<div class="product-id hidden"><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</div>
						<a class="addcart btn add2cart">Add to cart</a>
						<select class="quant add2cart">
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

	<?php echo '<script'; ?>
 src="js/handler.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

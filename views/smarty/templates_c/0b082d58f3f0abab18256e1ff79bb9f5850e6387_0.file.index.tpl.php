<?php
/* Smarty version 3.1.30, created on 2016-11-27 14:00:28
  from "/var/www/html/ecommerce_daw/views/smarty/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583ad8ec5a1754_46329024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b082d58f3f0abab18256e1ff79bb9f5850e6387' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/index.tpl',
      1 => 1480249223,
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
function content_583ad8ec5a1754_46329024 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Header -->
<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
	<div class="row marginlogo">
		<img src="imgs/logos/logo.png"/>
	</div>
	<div class="row">
		<div class="col-md-12">
			<!-- Navigation menu -->
			<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field1'=>$_smarty_tpl->tpl_vars['field1']->value,'product_categories'=>$_smarty_tpl->tpl_vars['product_categories']->value,'usermenu'=>$_smarty_tpl->tpl_vars['usermenu']->value), 0, false);
?>


			<div class="carousel slide marginsides" id="carousel-173855">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-173855">
					</li>
					<li data-slide-to="1" data-target="#carousel-173855">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="imgs/slider/holiday.jpg">
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="imgs/slider/lights.jpg">
					</div>
				</div> <a class="left carousel-control" href="#carousel-173855" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-173855" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<div class="row marginsides">
				<div id="added"></div>
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
					<div class="sticker sticker-new"></div>
					<div class="item-wrapper">
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

<?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-11-23 13:27:12
  from "/var/www/html/ecommerce_daw/views/smarty/templates/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58358b20ebfc47_16517635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37648f2802b947ba81a6aad40cf8c6996f527b6f' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/nav.tpl',
      1 => 1479903093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58358b20ebfc47_16517635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button> <a class="navbar-brand" href="index.php">Geekin' Out</a>
	</div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Sales!</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop by Category<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_categories']->value, 'product_category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_category']->value) {
?>
					<li>
						<a href="index.php?page=shop&category_id=<?php echo $_smarty_tpl->tpl_vars['product_category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product_category']->value['category'];?>
</a>
					</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
			</li>
			<li>
				<form class="navbar-form" role="search">
					<div class="form-group">
						<input type="text" class="form-control">
					</div> 
					<button type="submit" class="btn btn-default">
						Search
					</button>
				</form>
			</li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li >
				<a href="<?php echo $_smarty_tpl->tpl_vars['field1']->value['href'];?>
">
					<span class="glyphicon glyphicon-user" aria-hidden="true"/>
					 <?php echo $_smarty_tpl->tpl_vars['field1']->value['name'];?>

				</a>
			</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"/>
				</a>
			</li>
		</ul>
	</div>
</nav><?php }
}

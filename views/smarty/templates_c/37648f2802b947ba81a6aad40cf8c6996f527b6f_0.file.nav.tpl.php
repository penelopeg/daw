<?php
/* Smarty version 3.1.30, created on 2016-11-23 19:09:10
  from "/var/www/html/ecommerce_daw/views/smarty/templates/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835db469b5f17_27818243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37648f2802b947ba81a6aad40cf8c6996f527b6f' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/nav.tpl',
      1 => 1479924548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835db469b5f17_27818243 (Smarty_Internal_Template $_smarty_tpl) {
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
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['field1']->value['href'];?>
">
					<span class="glyphicon glyphicon-log-in"/><?php echo $_smarty_tpl->tpl_vars['field1']->value['name'];?>

				</a>
			</li>
			<?php if (!empty($_smarty_tpl->tpl_vars['usermenu']->value)) {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['usermenu']->value['href'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['usermenu']->value['name'];?>

				</a>
			</li>
			<?php } else { ?>
			<li>
				<a href="index.php?page=register">
					<span class="glyphicon glyphicon-user"/>Register
				</a>
			</li>
			<?php }?>
			<li>
				<a href="index.php?page=cart">
					<span class="glyphicon glyphicon-shopping-cart"/>
				</a>
			</li>
		</ul>
	</div>
</nav><?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-11-19 13:52:06
  from "/var/www/html/ecommerce_daw/smarty/templates/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58304af63bddb9_06577895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deee8b98f8128dbc33af79de0850e51dec6010ff' => 
    array (
      0 => '/var/www/html/ecommerce_daw/smarty/templates/nav.tpl',
      1 => 1479559851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58304af63bddb9_06577895 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button> <a class="navbar-brand" href="#">Geekin' Out</a>
	</div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Sales!</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop by Category<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">Apparel</a>
					</li>
					<li>
						<a href="#">Kids</a>
					</li>
					<li>
						<a href="#">Geek toys</a>
					</li>
					<li>
						<a href="#">Geek toys</a>
					</li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop by Interest<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">Tv shows</a>
					</li>
					<li>
						<a href="#">Books</a>
					</li>
					<li>
						<a href="#">Movies</a>
					</li>
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
					<br>
				</a>
			</li>
		</ul>
	</div>
</nav><?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-11-27 00:24:03
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583a1993cbb492_33329248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c224d1a8c731a264d94cd57c52c59685cca9595' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/head.tpl',
      1 => 1480202199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583a1993cbb492_33329248 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/backoffice.css"/>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../imgs/logos/logo_backoffice.ico">
	<title>Backoffice</title>
</head>
<body>
	<div class="wrapper">
	<?php if ($_smarty_tpl->tpl_vars['message']->value != 'none') {?>
	<div class="alert alert-danger animated fadeInUp message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
	<?php }?>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container"> 
			<div class="navbar-header">
				<a target="_blank" href="../index.php" class="navbar-brand"><img class="navbar-logo" src="../imgs/logo_backoffice.png"></a>
			</div>
			<ul class="nav navbar-nav">
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value == 'index') {?> class="active" <?php }?>><a href="index.php?page=index">Home</a></li>
				<li class="dropdown <?php if ($_smarty_tpl->tpl_vars['page']->value == 'addProd' || $_smarty_tpl->tpl_vars['page']->value == 'editProd') {?> active <?php }?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Products
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="index.php?page=addProd">Add Product</a></li>
						<li><a href="index.php?page=editProd">Edit Product</a></li>
					</ul>
				</li>
				<li class="dropdown <?php if ($_smarty_tpl->tpl_vars['page']->value == 'addProdCat') {?> active <?php }?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Categories
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="index.php?page=addProdCat">Add Product Categories</a></li>
					</ul>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['user']->value == 'admin') {?>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value == 'clients') {?> class="active" <?php }?>><a href="index.php?page=clients">Clients</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['page']->value == 'orders') {?> class="active" <?php }?>><a href="index.php?page=orders">Orders</a></li>			
				<li class="dropdown <?php if ($_smarty_tpl->tpl_vars['page']->value == 'addUser' || $_smarty_tpl->tpl_vars['page']->value == 'editUser' || $_smarty_tpl->tpl_vars['page']->value == 'remUser') {?> active <?php }?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Users
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="index.php?page=addUser">Add User</a></li>
						<li><a href="index.php?page=editUser">Edit User</a></li>
						<li><a href="index.php?page=remUser">Remove User</a></li>
					</ul>
				</li>
				<?php }?>
			</ul>				
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user"></span> 
						<strong><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</strong>
						<span class="glyphicon glyphicon-chevron-down"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<div class="navbar-login">
								<div class="row">
									<div class="col-lg-12">
										<p class="text-left small">Welcome <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
									</div>
								</div>
							</div>
						</li>
						<li class="divider"></li>
						<li>
							<div class="navbar-login navbar-login-session">
								<div class="row">
									<div class="col-lg-12">
										<p>
											<a href="logout.php" class="btn btn-danger btn-block">Logout</a>
										</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div><?php }
}

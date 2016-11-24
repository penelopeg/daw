<?php
/* Smarty version 3.1.30, created on 2016-11-24 00:08:51
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58362183903c25_84792058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c224d1a8c731a264d94cd57c52c59685cca9595' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/head.tpl',
      1 => 1479942506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58362183903c25_84792058 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>Backoffice</title>
</head>
<body>
	<div class="wrapper">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container"> 
			<div class="navbar-header">
				<a target="_blank" href="../index.php" class="navbar-brand">GeekinOut</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Clients</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Products
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Add Product</a></li>
						<li><a href="#">Edit Product</a></li>
						<li><a href="#">Remove Product</a></li>
					</ul>
				</li>
				<li><a href="#">Orders</a></li>			
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Users
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Add User</a></li>
						<li><a href="#">Edit User</a></li>
						<li><a href="#">Remove User</a></li>
					</ul>
				</li>
			</ul>				
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user"></span> 
						<strong>User</strong>
						<span class="glyphicon glyphicon-chevron-down"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<div class="navbar-login">
								<div class="row">
									<div class="col-lg-12">
										<p class="text-left"><strong>Name</strong></p>
										<p class="text-left small">email@email.com</p>
										<p class="text-left">
											<a href="#" class="btn btn-primary btn-block btn-sm">Update Settings</a>
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

<?php
/* Smarty version 3.1.30, created on 2016-11-17 15:43:27
  from "/var/www/html/ecommerce_daw/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582dc20f1cf844_23417494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97d01cfd0f36e01de37e725ea618864ca71f6e4a' => 
    array (
      0 => '/var/www/html/ecommerce_daw/smarty/templates/login.tpl',
      1 => 1479393805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_582dc20f1cf844_23417494 (Smarty_Internal_Template $_smarty_tpl) {
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

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Navigation menu -->
				<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
		</div>
		<div class="row" style="margin-top:55px;">
			<div class="col-sm-4 col-sm-push-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2>Login</h2>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Login">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="pwd" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary">Enter</button>
							<input type="checkbox">Remember Me</br>
							<a href="#">I don't have an account</a>
						</form>
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

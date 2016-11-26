<?php
/* Smarty version 3.1.30, created on 2016-11-26 15:26:03
  from "/var/www/html/ecommerce_daw/views/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58399b7b5c43f6_25623613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacc6f3003b8bad08029910e3fc94df32f08cb64' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/login.tpl',
      1 => 1480170264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58399b7b5c43f6_25623613 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Geekin Out</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
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
			<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field1'=>$_smarty_tpl->tpl_vars['field1']->value,'product_categories'=>$_smarty_tpl->tpl_vars['product_categories']->value,'usermenu'=>$_smarty_tpl->tpl_vars['usermenu']->value), 0, false);
?>

			</div>
		</div>
		<div class="row margintop">
			<div class="col-sm-4 col-sm-push-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2>Login</h2>
						<form method="post" action="controllers/login_action.php<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
">
							<div class="form-group">
								 <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="pwd" name="pwd" placeholder="********" required>
							</div>
							<button type="submit" class="btn btn-primary">Enter</button>
							<a href="<?php echo $_smarty_tpl->tpl_vars['field2']->value['href'];?>
">I don't have an account</a>
							<p><a href="#">I forgot my password!</a></p>
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

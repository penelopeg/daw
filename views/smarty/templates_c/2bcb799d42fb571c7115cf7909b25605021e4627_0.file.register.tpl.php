<?php
/* Smarty version 3.1.30, created on 2016-11-27 13:12:32
  from "/var/www/html/ecommerce_daw/views/smarty/templates/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583acdb0713d84_07207714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bcb799d42fb571c7115cf7909b25605021e4627' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/register.tpl',
      1 => 1480248749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_583acdb0713d84_07207714 (Smarty_Internal_Template $_smarty_tpl) {
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
		</div>
	<section class="container margintop">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2 id="title">Sign Up</h2>
				<form method="post" action="controllers/register_action.php">
					<div class="form-group">
						<label for="firstname">First Name:</label>
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input your first name" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
" required/>
					</div>
					<div class="form-group">
						<label for="lastname">Last Name:</label>
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Input your last name" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
" required/>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Input your email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" required/>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" name="pwd" placeholder="******" required/> 
					</div>
					<div class="form-group">
						<label for="pwd-r">Repeat Password:</label>
						<input type="password" class="form-control" id="pwd-r" name="pwd-r" placeholder="Repeat your password" required/>
					</div>

					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-6"><a href="index.php?page=login" class="btn btn-primary btn-block btn-lg">I have an account!</a></div>
						<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
					</div>
				</form>
			</div>
		</div>
	</section>
	</div>
	<!-- footer -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}

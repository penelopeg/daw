<?php
/* Smarty version 3.1.30, created on 2016-11-12 11:20:58
  from "/var/www/html/ecommerce_daw/smarty/templates/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5826ed0a4c1e58_72196637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5f9ba96cf4496ff7d749abc3bae8458330c4c19' => 
    array (
      0 => '/var/www/html/ecommerce_daw/smarty/templates/register.tpl',
      1 => 1478946037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5826ed0a4c1e58_72196637 (Smarty_Internal_Template $_smarty_tpl) {
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
				<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
		</div>
	</div>
	<section class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2 id="title">Formulário de Cadastro</h2>
				<h2 style="color: red;"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>
				<form method="post" action="register_action.php">
					<div class="form-group">
						<label for="name">Nome:</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Coloque o seu nome" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" required/>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Coloque o seu email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" required/>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Coloque a sua password" required/> 
					</div>
					<div class="form-group">
						<label for="pwd-r">Repita Password:</label>
						<input type="password" class="form-control" id="pwd-r" name="pwd-r" placeholder="Repita a sua password" required/>
					</div>
					<div class="text-center">
						<button type="button" class="btn btn-success col-sm-6">Voltar</button>
						<input type="submit" class="btn btn-success col-sm-6" value="Finalizar Cadastro">
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

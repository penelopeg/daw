<?php
/* Smarty version 3.1.30, created on 2016-11-26 15:08:04
  from "/var/www/html/ecommerce_daw/views/smarty/templates/client_zone.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58399744e70752_90268577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9de0db1fde7cce909d413517cdb1878d30946da3' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/client_zone.tpl',
      1 => 1480166250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58399744e70752_90268577 (Smarty_Internal_Template $_smarty_tpl) {
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
	</div>
	<section class="container margintop">
		<div class="row">
			<div class="col-md-3">
				<p>Welcome <?php echo $_smarty_tpl->tpl_vars['client']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['client']->value['lastname'];?>
</p>
				<div class="links">
					<ul class="nav">
						<li class="active">
							<a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['option1']['url'];?>
">
								<i class="glyphicon glyphicon-user"></i>
								<?php echo $_smarty_tpl->tpl_vars['menu']->value['option1']['title'];?>

							</a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['option2']['url'];?>
">
								<i class="glyphicon glyphicon-tags"></i>
								<?php echo $_smarty_tpl->tpl_vars['menu']->value['option2']['title'];?>

							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['orders']->value)) {?>
						<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['filename']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('client'=>$_smarty_tpl->tpl_vars['client']->value,'orders'=>$_smarty_tpl->tpl_vars['orders']->value), 0, true);
?>

					<?php } else { ?>
						<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['filename']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('client'=>$_smarty_tpl->tpl_vars['client']->value,'cities'=>$_smarty_tpl->tpl_vars['cities']->value,'countries'=>$_smarty_tpl->tpl_vars['countries']->value), 0, true);
?>

					<?php }?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}

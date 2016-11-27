<?php
/* Smarty version 3.1.30, created on 2016-11-27 13:15:35
  from "/var/www/html/ecommerce_daw/views/smarty/templates/about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583ace67ae8f04_95246588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bdb87a0073bb3c2058f59d4f0529df6269d112d' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/about.tpl',
      1 => 1480248924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_583ace67ae8f04_95246588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="container-fluid">
		<div class="row marginlogo">
			<img src="imgs/logos/logo.png"/>
		</div>
		<div class="row">
			<div class="col-md-12">
			<!-- Navigation menu -->
			<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field1'=>$_smarty_tpl->tpl_vars['field1']->value,'product_categories'=>$_smarty_tpl->tpl_vars['product_categories']->value,'usermenu'=>$_smarty_tpl->tpl_vars['usermenu']->value), 0, false);
?>

			</div>
		</div>
	</div>
	<section class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="added" class="has-success animated fadeInUp"></div>
				<div class="row">
					<div class="col-md-5">
					<h3>Welcome to a magical place where all your dreams can come true!</h3>
					<p>Our brand wants to spread happiness and magic (read: Nerdiness) all across the globe. For this,
					we have an incredible collection of geeky gifts for all ages, fandoms and beings!</p>
					</div>
					<div class="col-md-7">
					<img src="imgs/site/alert.jpg"></img>
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

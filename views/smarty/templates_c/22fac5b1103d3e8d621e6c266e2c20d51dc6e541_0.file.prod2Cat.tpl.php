<?php
/* Smarty version 3.1.30, created on 2016-11-26 19:10:50
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/prod2Cat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839d02acaf403_00951918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22fac5b1103d3e8d621e6c266e2c20d51dc6e541' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/prod2Cat.tpl',
      1 => 1480183842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839d02acaf403_00951918 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="body row">
		<div class="col-md-6">
			<table class="table table-striped">
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Image</th>
				<th>Available</th>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prods']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
					<tr class="clickable-row prod">
						<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['price'];?>
 €</td>
						<td><?php echo $_smarty_tpl->tpl_vars['prod']->value['description'];?>
</td>
						<td><a target="_blank" href="../imgs/<?php echo $_smarty_tpl->tpl_vars['prod']->value['image_url'];?>
">../imgs/<?php echo $_smarty_tpl->tpl_vars['prod']->value['image_url'];?>
</a></td>
						<td class="hidden"><?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['prod']->value['available'] == 1) {?>Yes<?php } else { ?>No<?php }?></td>
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</table>
		</div>
		<div class="col-md-6 ox">
			<div class="container">
				<div class="row centered-form">
					<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-1">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Associate Product Categories</h3>
							</div>
							<div class="panel-body">
								<form role="form" method="POST" action="actions/prod2Cat.php" enctype='multipart/form-data'>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12">
											<div class="form-group">
											<div class="checkbox-container">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
												<input type="checkbox"/><?php echo $_smarty_tpl->tpl_vars['cat']->value['category'];?>
<br/>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

											</div>
											</div>
										</div>
									</div>
									<input type="submit" value="Save" class="btn btn-info btn-block">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><?php }
}

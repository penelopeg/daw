<?php
/* Smarty version 3.1.30, created on 2016-11-26 23:27:30
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/editProd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583a0c5249b588_44789433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2ce23c0da2475a9f9fdde8c8e2f6c655f7013b6' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/editProd.tpl',
      1 => 1480199244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583a0c5249b588_44789433 (Smarty_Internal_Template $_smarty_tpl) {
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
								<h3 class="panel-title">Edit product</h3>
							</div>
							<div class="panel-body">
								<form role="form" method="POST" action="actions/editProd.php" enctype='multipart/form-data'>
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
											<input type="number" name="id" id="id" class="hidden">
											<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Name" required/>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="number" name="price" id="price" class="form-control input-sm" placeholder="Price" step="0.01" required/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<textarea name="description" id="description" class="form-control input-sm" placeholder="Description" required></textarea>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group fileUpload btn btn-default">
												<span>Upload Image</span>
												<input type="file" value="Add" name="img" id="img" class="upload"/>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="checkbox" value="Available" name="available" id="available"/>
												<span>Available</span>
											</div>
										</div>							
									</div>
									<!--<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12">
											<label>Product Categories</label>
											<div class="form-group checkbox-container">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
												<input type="checkbox" name="category[<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
]"/><?php echo $_smarty_tpl->tpl_vars['cat']->value['category'];?>
<br/>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

											</div>
										</div>
									</div>-->
									<input type="submit" value="Edit" class="btn btn-info btn-block">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><?php }
}

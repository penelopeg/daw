<?php
/* Smarty version 3.1.30, created on 2016-11-26 23:46:08
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/addProdCat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583a10b00fbb96_85667591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '623b8d6a7c55d87587696073b7cee2341b51da4c' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/addProdCat.tpl',
      1 => 1480200353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583a10b00fbb96_85667591 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container body">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add new product Category</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="actions/addProdCat.php" enctype='multipart/form-data'>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Name" required/>
								</div>
							</div>
						</div>
						<input type="submit" value="Add" class="btn btn-info btn-block">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>	<?php }
}

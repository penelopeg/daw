<?php
/* Smarty version 3.1.30, created on 2016-11-25 22:55:55
  from "/var/www/html/daw/views/smarty/templates/backoffice/addProd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838b36b3b3159_72696512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be8e91c5833e2c9b557e27fb554b1a9b6428100d' => 
    array (
      0 => '/var/www/html/daw/views/smarty/templates/backoffice/addProd.tpl',
      1 => 1480110944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5838b36b3b3159_72696512 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container body">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add new product</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="actions/addProd.php" enctype='multipart/form-data'>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Name" required/>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="number" name="price" id="price" class="form-control input-sm" placeholder="Price" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea name="description" id="description" class="form-control input-sm" placeholder="Description" required></textarea>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group fileUpload btn btn-default">
									<span>Upload Image</span>
									<input type="file" value="Add" name="img" id="img" class="upload" required/>
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

<?php
/* Smarty version 3.1.30, created on 2016-11-25 21:50:53
  from "/var/www/html/daw/views/smarty/templates/backoffice/addUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838a42d220d70_37433870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '242cf1934d0d894b1e96841077173832db6219cc' => 
    array (
      0 => '/var/www/html/daw/views/smarty/templates/backoffice/addUser.tpl',
      1 => 1480107045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5838a42d220d70_37433870 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container body">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add new User</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="actions/addUser.php">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
								<input type="text" name="firstname" class="form-control input-sm" placeholder="First Name" required/>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="lastname" class="form-control input-sm" placeholder="Last Name" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control input-sm" placeholder="Email" required/>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password" class="form-control input-sm" placeholder="Password" required/>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<select name="role" class="form-control input-sm">
										<option value="1">Administrator</option>
										<option value="2">Editor</option>
									</select>
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

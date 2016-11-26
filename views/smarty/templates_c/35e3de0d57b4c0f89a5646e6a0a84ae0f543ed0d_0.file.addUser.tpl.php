<?php
/* Smarty version 3.1.30, created on 2016-11-26 15:52:51
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/addUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839a1c3cea162_36241990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35e3de0d57b4c0f89a5646e6a0a84ae0f543ed0d' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/addUser.tpl',
      1 => 1480158430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839a1c3cea162_36241990 (Smarty_Internal_Template $_smarty_tpl) {
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

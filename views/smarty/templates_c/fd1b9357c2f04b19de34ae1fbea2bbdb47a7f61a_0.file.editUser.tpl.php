<?php
/* Smarty version 3.1.30, created on 2016-11-26 15:52:49
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/editUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5839a1c108e257_58256705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd1b9357c2f04b19de34ae1fbea2bbdb47a7f61a' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/editUser.tpl',
      1 => 1480158430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5839a1c108e257_58256705 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="body row">
		<div class="col-md-6">
			<table class="table table-striped">
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>User Type</th>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
					<tr class="clickable-row">
						<td><?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['user']->value['type'];?>
</td>
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
								<h3 class="panel-title">Edit User</h3>
							</div>
							<div class="panel-body">
								<form role="form" method="POST" action="actions/editUser.php">
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
											<input type="text" name="firstname" id="fm" class="form-control input-sm" placeholder="First Name" required/>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="lastname" id="lm" class="form-control input-sm" placeholder="Last Name" required/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="em" class="form-control input-sm" placeholder="Email" required/>
										<input type="email" name="oldEmail" id="oem" hidden="hidden"/>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password" id="pw" class="form-control input-sm" placeholder="Password" required/>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<select name="role" id="role" class="form-control input-sm">
													<option value="1">Administrator</option>
													<option value="2">Editor</option>
												</select>
											</div>
										</div>
									</div>
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

<?php
/* Smarty version 3.1.30, created on 2016-11-25 15:01:05
  from "/var/www/html/ecommerce_daw/views/smarty/templates/my_info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58384421538547_01198459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf3fefe774965910ba010e041bdfea8a527971a' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/my_info.tpl',
      1 => 1480082464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58384421538547_01198459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 id="title">My Information</h2>
<form method="post" action="controllers/save_action.php">
	<div class="col-md-6">
		<input type="number" class="hidden" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
"/>
		<div class="form-group">
			<label for="firstname">First Name:</label>
			<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input your first name" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['firstname'];?>
" required/>
		</div>
		<div class="form-group">
			<label for="lastname">Last Name:</label>
			<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Input your last name" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['lastname'];?>
" required/>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Input your email" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
" required/>
		</div>
		<!--<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pwd" placeholder="******" required/> 
		</div>
		<div class="form-group">
			<label for="pwd-r">Repeat Password:</label>
			<input type="password" class="form-control" id="pwd-r" name="pwd-r" placeholder="Repeat your password" required/>
		</div>-->
		<hr class="colorgraph">
		<div class="row">
			<div class="col-xs-12 col-md-6"><input type="submit" value="Save" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="address">Address:</label>
			<input type="text" class="form-control" id="address" name="address" placeholder="Input your address" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['address'];?>
" required/>
		</div>
		<div class="form-group">
			<label for="city">City:</label>
			<select name="city">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cities']->value, 'city');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['city']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['city']->value['id'] == $_smarty_tpl->tpl_vars['client']->value['city_id']) {?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['city']->value['city_name'];?>
</option>
				<?php } else { ?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['city']->value['city_name'];?>
</option>
				<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
		</div>
		<div class="form-group">
			<label for="country">Country:</label>
			<select name="country">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['country']->value['id'] == $_smarty_tpl->tpl_vars['client']->value['country_id']) {?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
				<?php } else { ?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
				<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select>
		</div>
		<div class="form-group">
			<label for="payment_info">Credit card number:</label>
			<input type="text" class="form-control" id="payment_info" name="payment_info" placeholder="Input your payment information" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['payment_info'];?>
" required/>
		</div>
	</div>
</form><?php }
}

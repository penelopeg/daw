<?php
/* Smarty version 3.1.30, created on 2016-11-23 19:44:48
  from "/var/www/html/daw/views/smarty/templates/backoffice/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835e3a0ba5484_52741896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e86bc40b4bc6f35d5c57939d7af18969a5e926' => 
    array (
      0 => '/var/www/html/daw/views/smarty/templates/backoffice/login.tpl',
      1 => 1479926684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835e3a0ba5484_52741896 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Backoffice - Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/backoffice.css"/>	
</head>
<body>

	<div class="container">
		<div class="login-container">
			<?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {?>
	        	<div id="output" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
	        <?php }?>
	        <div class="avatar"></div>
	        <div class="form-box">
	            <form action="login_action.php" method="post">
	                <input type="email" name="email" placeholder="Email" required>
	                <input type="password" name="password" placeholder="Password" required>
	                <button class="btn btn-info btn-block login" type="submit">Login</button>
	            </form>
	        </div>
        </div>   
	</div>
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-11-27 14:04:29
  from "/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583ad9ddb82d85_22444826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8fcaf631faf9ff904d7179521ca2758973b708f' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/backoffice/login.tpl',
      1 => 1480250505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583ad9ddb82d85_22444826 (Smarty_Internal_Template $_smarty_tpl) {
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
	            <form action="logIn.php" method="post">
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

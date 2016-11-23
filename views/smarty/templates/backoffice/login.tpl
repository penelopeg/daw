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
			{if isset($class)}
	        	<div id="output" class="{$class}">{$message}</div>
	        {/if}
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
</html>
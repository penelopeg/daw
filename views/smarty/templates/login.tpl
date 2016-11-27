<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Geekin Out</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Navigation menu -->
			{include file="nav.tpl" field1=$field1 product_categories=$product_categories usermenu=$usermenu}
			</div>
		</div>
		<div class="row margintop">
			<div class="col-sm-4 col-sm-push-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2>Login</h2>
						<form method="post" action="controllers/login_action.php{$redirect}">
							<div class="form-group">
								 <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="pwd" name="pwd" placeholder="********" required>
							</div>
							<button type="submit" class="btn btn-primary">Enter</button>
							<a href="{$field2.href}">I don't have an account</a>
							<!--<p><a href="#">I forgot my password!</a></p>-->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	{include file="footer.tpl"}
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Geekin Out</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- Navigation menu -->
				{include file="nav.tpl" field1=$field1}
			</div>
		</div>
	<section class="container margintop">
		<div class="panel panel-default">
			<div class="panel-body">
				<h2 id="title">Formulário de Cadastro</h2>
				<h2 style="color: red;">{$message}</h2>
				<form method="post" action="controllers/register_action.php">
					<div class="form-group">
						<label for="firstname">First Name:</label>
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input your first name" value="{$firstname}" required/>
					</div>
					<div class="form-group">
						<label for="lastname">Last Name:</label>
						<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Input your last name" value="{$lastname}" required/>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Input your email" value="{$email}" required/>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" name="pwd" placeholder="******" required/> 
					</div>
					<div class="form-group">
						<label for="pwd-r">Repita Password:</label>
						<input type="password" class="form-control" id="pwd-r" name="pwd-r" placeholder="Repeat your password" required/>
					</div>
					<div class="text-center">
						<button type="button" class="btn btn-success col-sm-6">Voltar</button>
						<input type="submit" class="btn btn-success col-sm-6" value="Finalizar Cadastro">
					</div>
				</form>
			</div>
		</div>
	</section>
	</div>
	<!-- footer -->
	{include file="footer.tpl"}
</body>
</html>
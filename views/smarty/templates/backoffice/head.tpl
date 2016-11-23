<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/backoffice.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backoffice</title>
</head>
<body>
	<div class="wrapper">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container"> 
			<div class="navbar-header">
				<a target="_blank" href="../index.php" class="navbar-brand">GeekinOut</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Clients</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Products
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Add Product</a></li>
						<li><a href="#">Edit Product</a></li>
						<li><a href="#">Remove Product</a></li>
					</ul>
				</li>
				<li><a href="#">Orders</a></li>			
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Users
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Add User</a></li>
						<li><a href="#">Edit User</a></li>
						<li><a href="#">Remove User</a></li>
					</ul>
				</li>
			</ul>				
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-user"></span> 
						<strong>User</strong>
						<span class="glyphicon glyphicon-chevron-down"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<div class="navbar-login">
								<div class="row">
									<div class="col-lg-12">
										<p class="text-left"><strong>Name</strong></p>
										<p class="text-left small">email@email.com</p>
										<p class="text-left">
											<a href="#" class="btn btn-primary btn-block btn-sm">Update Settings</a>
										</p>
									</div>
								</div>
							</div>
						</li>
						<li class="divider"></li>
						<li>
							<div class="navbar-login navbar-login-session">
								<div class="row">
									<div class="col-lg-12">
										<p>
											<a href="logout.php" class="btn btn-danger btn-block">Logout</a>
										</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
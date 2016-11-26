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
		<div class="row marginlogo">
			<img src="imgs/logos/logo.png"/>
		</div>
		<div class="row">
			<div class="col-md-12">
			<!-- Navigation menu -->
			{include file="nav.tpl" field1=$field1 product_categories=$product_categories usermenu=$usermenu}
			</div>
		</div>
	</div>
	<section class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="added" class="has-success animated fadeInUp"></div>
				<div class="row">
					<div class="col-md-5">
					<h3>Welcome to a magical place where all your dreams can come true!</h3>
					<p>Our brand wants to spread happiness and magic (read: Nerdiness) all across the globe. For this,
					we have an incredible collection of geeky gifts for all ages, fandoms and beings!</p>
					</div>
					<div class="col-md-7">
					<img src="imgs/site/alert.jpg"></img>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	{include file="footer.tpl"}
</body>
</html>
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
				{include file="nav.tpl" field1=$field1 product_categories=$product_categories usermenu=$usermenu}
			</div>
		</div>
	</div>
	<section class="container margintop">
		<div class="row">
			<div class="col-md-3">
				<p>Welcome {$client.firstname} {$client.lastname}</p>
				<div class="links">
					<ul class="nav">
						<li class="active">
							<a href="{$menu.option1.url}">
								<i class="glyphicon glyphicon-user"></i>
								{$menu.option1.title}
							</a>
						</li>
						<li>
							<a href="{$menu.option2.url}">
								<i class="glyphicon glyphicon-tags"></i>
								{$menu.option2.title}
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-body">
					{if isset($orders)}
						{include file="{$filename}" client=$client orders=$orders}
					{else}
						{include file="{$filename}" client=$client cities=$cities countries=$countries}
					{/if}

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	{include file="footer.tpl"}
	<script src="js/handler.js"></script>
</body>
</html>
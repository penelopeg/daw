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
				{include file="nav.tpl"}
			</div>
			<div class="row margintop">
				<div class="col-md-12">
					{if isset($noresults)}
						<h3>{$noresults}</h3>
					{/if}
				</div>
				{foreach from=$products item=$product} 
				<div class="col-md-4">
					<div class="thumbnail">
						<img class="ratio img-thumbnail" alt="Bootstrap Thumbnail First" src="imgs/{$product.image_url}">
						<div class="caption">
							<h4 class="pull-right">{$product.price}€</h4>
							<h4 class="text-primary">{$product.name}</h4>
							<!--<p> {$product.description} </p>-->
							<p>
								<a class="btn btn-primary" href="index.php?page=details&id={$product.id}">Details</a>
								<a href="#"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"/> </a>
							</p>
						</div>
					</div>
				</div>
				{/foreach}
			</div>
			
		</div>
	</div>
	<!-- footer -->
	{include file="footer.tpl"}
</body>
</html>
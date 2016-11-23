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
			{include file="nav.tpl" field1=$field1 product_categories=$product_categories}

			<div class="carousel slide margintop" id="carousel-173855">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-173855">
					</li>
					<li data-slide-to="1" data-target="#carousel-173855">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="imgs/slider/holiday.jpg">
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="imgs/slider/lights.jpg">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-173855" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-173855" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<div class="row margintop">
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
</div>
		<!-- footer -->
		{include file="footer.tpl"}
	</body>
</html>
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

				<div class="carousel slide marginsides" id="carousel-173855">
					<ol class="carousel-indicators">
						<li class="active" data-slide-to="0" data-target="#carousel-173855">
						</li>
						<li data-slide-to="1" data-target="#carousel-173855">
						</li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img alt="Carousel Bootstrap First" src="imgs/slider/holiday.jpg">
						</div>
						<div class="item">
							<img alt="Carousel Bootstrap Second" src="imgs/slider/lights.jpg">
						</div>
					</div> <a class="left carousel-control" href="#carousel-173855" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-173855" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
				<div class="row marginsides">
					<div id="added"></div>
					{foreach from=$products item=$product} 
					<div class="col-md-3">
						<div class="product-item">
							<div class="pi-img-wrapper">
								<img src="imgs/{$product.image_url}" class="img-responsive" alt="{$product.name}">
								<div>
									<a href="index.php?page=details&id={$product.id}" class="btn">Details</a>
								</div>
							</div>
							<h3><a href="index.php?page=details&id={$product.id}">{$product.name}</a></h3>
						<div class="sticker sticker-new"></div>
						<div class="item-wrapper">
							<div class="pi-price">{$product.price}€</div>
							<div class="product-id hidden">{$product.id}</div>
							<a class="addcart btn add2cart">Add to cart</a>
							<select class="quant add2cart">
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								<option value='6'>6</option>
								<option value='7'>7</option>
								<option value='8'>8</option>
								<option value='9'>9</option>
								<option value='10'>10</option>
							</select>
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
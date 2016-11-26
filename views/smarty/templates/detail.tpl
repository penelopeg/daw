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
		<div class="panel panel-default">
			<div class="panel-body">
				<div id="added" class="has-success animated fadeInUp"></div>
				<h3>
					{$product.name}
				</h3>
				<div class="row">
					<div class="col-md-8">
						<img class="detail" alt="Bootstrap Image Preview" src="imgs/{$product.image_url}"/>
					</div>
					<div class="col-md-4">
						<p>
							{$product.description}
						</p>
						<h3>
							{$product.price}€
						</h3>
						<div class="product-id hidden">{$product.id}</div>
						<select class="quant">
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
						<button type="button" class="addcart btn btn-default">
							Add to Cart
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	{include file="footer.tpl"}
</body>
</html>
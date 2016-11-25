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
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-12">
				<!-- Navigation menu -->
				{include file="nav.tpl" field1=$field1 product_categories=$product_categories usermenu=$usermenu}
			</div>
		</div>
		<section class="container margintop">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 id="title">Your Order</h2>
					<form method="post" action="controllers/order_action.php">
						<div class="col-md-6">
							<h3 id="title">Your Information</h3>
							<input type="number" class="hidden" name="client_id" value="{$client_id}"/>
							<div class="form-group">
								<label for="firstname">First Name:</label>
								<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input your first name" value="{$firstname}" required/>
							</div>
							<div class="form-group">
								<label for="lastname">Last Name:</label>
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Input your last name" value="{$lastname}" required/>
							</div>
							<div class="form-group">
								<label for="address">Address:</label>
								<input type="text" class="form-control" id="address" name="address" placeholder="Input your address" value="{$address}" required/>
							</div>
							<div class="form-group">
								<label for="city">City:</label>
								<select name="city">
									{foreach $cities as $city}
									{if $city.id == $city_id}
									<option value='{$city.id}' selected="selected">{$city.city_name}</option>
									{else}
									<option value='{$city.id}'>{$city.city_name}</option>
									{/if}
									{/foreach}
								</select>
							</div>
							<div class="form-group">
								<label for="country">Country:</label>
								<select name="country">
									{foreach $countries as $country}
									{if $country.id == $country_id}
									<option value='{$country.id}' selected="selected">{$country.country_name}</option>
									{else}
									<option value='{$country.id}'>{$country.country_name}</option>
									{/if}
									{/foreach}
								</select>
							</div>
							<div class="form-group">
								<label for="payment_info">Credit card number:</label>
								<input type="text" class="form-control" id="payment_info" name="payment_info" placeholder="Input your payment information" value="{$payment_info}" required/>
							</div>
							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-12 col-md-6"><input type="submit" value="Order" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
							</div>
						</div>
						<div class="col-md-6">
							<h3 id="title">Your Products</h3>
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Product</th>
										<th>Quantity</th>
										<th class="text-center">Price</th>
										<th class="text-center">Total</th>
										<th> </th>
									</tr>
								</thead>
								<tbody>
									{foreach $products as $product}
									<tr>
										<td class="col-md-10">
											<div class="media">
												<a class="thumbnail pull-left" href="#"> <img class="media-object" src="imgs/{$product.image_url}" style="width: 72px; height: 72px;"> </a>
												<div class="media-body">
													<h4 class="media-heading">{$product.name}</h4>
												</div>
											</div>
										</td>
										<input type="number" class="hidden" name="quant[]" value="{$product.quantity}"/>
										<input type="number" class="hidden" name="id[]" value="{$product.id}"/>
										<td class="col-md-1 text-center"><strong>{$product.quantity}</strong></td>
										<td class="col-md-1 text-center"><strong>{$product.price}€</strong></td>
										<td class="col-md-1 text-center"><strong>{$product.total}€</strong></td>
										<td class='col-md-1 text-center'></td>
									</tr>
									{/foreach}
									<tr>
										<td>   </td>
										<td>   </td>
										<td>   </td>
										<td><h3>Total</h3></td>
										<td class="text-right"><h3><strong>{$total}€</strong></h3></td>
									</tr>
								</tbody>
							</table>
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
<!-- Header -->
{include file="head.tpl"}
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Navigation menu -->
		{include file="nav.tpl" field1=$field1 product_categories=$product_categories usermenu=$usermenu}		
		</div>
	</div>
</div>
<div class="container margintop">
	<div class="row">
		<div class="col-sm-12 col-md-10 col-md-offset-1 links">
			<div id="removed"></div>
			{if isset($message)}
			<h2>{$message}</h2>
			{/if}
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
						<td class="col-md-6">
							<div class="media">
								<a class="thumbnail pull-left" href="index.php?page=details&id={$product.id}"> <img class="media-object" src="imgs/{$product.image_url}" style="width: 72px; height: 72px;"> </a>
								<div class="media-body">
									<h4 class="media-heading"><a href="index.php?page=details&id={$product.id}">{$product.name}</a></h4>
								</div>
							</div>
						</td>
						<td class="col-md-1" style="text-align: center">
							<input type="number" class="form-control change-quantity" id="quantity" value="{$product.quantity}">
						</td>
						<td class="col-md-1 text-center"><strong>{$product.price}€</strong></td>
						<td class="col-md-1 text-center"><strong>{$product.total}€</strong></td>
						<td class="col-md-1">
							<div class="product-id hidden">{$product.id}</div>
							<button type="button" class="btn btn-danger removecart">
								<span class="glyphicon glyphicon-remove"></span> Remove
							</button></td>
					</tr>
					{/foreach}
					<tr>
						<td>   </td>
						<td>   </td>
						<td>   </td>
						<td><h3>Total</h3></td>
						<td class="text-right"><h3><strong>{$total}€</strong></h3></td>
					</tr>
					<tr>
						<td>   </td>
						<td>   </td>
						<td>   </td>
						<td>
							<button onclick="location.href='index.php?page=shop';" type="button" class="btn btn-default">
								<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
							</button>
						</td>
						<td>
							<button onclick="location.href='index.php?page=order';" type="button" class="btn btn-success">
								Checkout <span class="glyphicon glyphicon-play"></span>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- footer -->
{include file="footer.tpl"}
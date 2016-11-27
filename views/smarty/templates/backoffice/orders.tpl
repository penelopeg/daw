<div class="body">
	<table class="table table-condensed tableCollapse">
		<thead>
			<tr>
				<th>Order Ref.</th>
				<th>Client name</th>
				<th>Date</th>
				<th>Total</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			{foreach $orders as $data}
			<tr data-toggle="collapse" data-target=".{$data.order.id}" class="accordion-toggle clickable-row">
				<td class="orderid">{$data.order.id}</td>
				<td>{$data.client.firstname} {$data.client.lastname}</td>
				<td>{$data.order.order_date}</td>
				<td>{$data.order.total}</td>
				<td>
					<select name="status" class="status">	
						{foreach $status as $status_data}
						{if $status_data.id == $data.order.status_id}
						<option value='{$status_data.id}' selected="selected">{$status_data.status}</option>
						{else}
						<option value='{$status_data.id}'>{$status_data.status}</option>
						{/if}
						{/foreach}
					</select>
				</td>
			</tr>
			<tr>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Product Ref.</i></div> </td>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Name</i></div> </td>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Quantity</i></div> </td>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Price</i></div> </td>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Total</i></div> </td>
			</tr>
			{foreach $data.products as $product}
			<tr>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.product_id}</div> </td>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.name}</div> </td>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.quantity}</div> </td>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.price}</div> </td>
				<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.price_total}</div> </td>
			</tr>
			{/foreach}
			{/foreach}
		</tbody>
	</table>
</div>
<table class="table table-striped table-condensed tableCollapse">
	<thead>
		<tr>
			<th>Order Ref.</th>
			<th>Date</th>
			<th>Total</th>
			<th>Status</th>
		</tr>
	</thead>   
	<tbody>
		{foreach $orders as $data}
		<tr data-toggle="collapse" data-target=".{$data.order.id}" class="accordion-toggle">
			<td>{$data.order.id}</td>
			<td>{$data.order.order_date}</td>
			<td>{$data.order.total}</td>
			{if $data.order.status_id == 1}
				<td><span class="label label-default">{$data.order.status}</span></td>
			{elseif $data.order.status_id == 2}
				<td><span class="label label-warning">{$data.order.status}</span></td>
			{elseif $data.order.status_id == 3}
				<td><span class="label label-important">{$data.order.status}</span></td>
			{else}
				<td><span class="label label-success">{$data.order.status}</span></td>
			{/if}
		</tr>
		<tr>
			<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Name</i></div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Quantity</i></div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Price</i></div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}"><i>Total</i></div> </td>
		</tr>
		{foreach $data.products as $product}
		<tr>
			<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.name}</div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.quantity}</div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.price}</div> </td>
			<td class="hiddenRow"><div class="accordian-body collapse {$data.order.id}">{$product.price_total}</div> </td>
		</tr>
		{/foreach}
		{/foreach}
	</tbody>
</table>

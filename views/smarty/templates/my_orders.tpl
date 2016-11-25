<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>Order Ref.</th>
			<th>Date</th>
			<th>Status</th>
		</tr>
	</thead>   
	<tbody>
		{foreach $orders as $data}
		<tr>
			<td>{$data.order.id}</td>
			<td>{$data.order.order_date}</td>
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
		{/foreach}
  </tbody>
</table>

	<div class="body">
		<table class="table table-striped">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>City</th>
			<th>Country</th>
			{foreach $clients as $client}
				<tr>
					<td>{$client.firstname}</td>
					<td>{$client.lastname}</td>
					<td>{$client.email}</td>
					<td>{$client.address}</td>
					<td>{$client.city_name}</td>
					<td>{$client.country_name}</td>
				</tr>
			{/foreach}
		</table>
	</div>
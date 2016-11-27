	<div class="body">
		<table class="table table-striped">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>User Type</th>
			<th>Remove</th>
			{foreach $users as $user}
				<tr>
					<td>{$user.firstname}</td>
					<td>{$user.lastname}</td>
					<td>{$user.email}</td>
					<td>{$user.type}</td>
					<td><a class="glyphicon glyphicon-remove" href="actions/remUser.php?id={$user.id}"></a></td>
				</tr>
			{/foreach}
		</table>
	</div>
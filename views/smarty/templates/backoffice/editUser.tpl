	<div class="body row">
		<div class="col-md-6">
			<table class="table table-striped">
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>User Type</th>
				{foreach $users as $user}
					<tr class="clickable-row">
						<td>{$user.firstname}</td>
						<td>{$user.lastname}</td>
						<td>{$user.email}</td>
						<td>{$user.type}</td>
					</tr>
				{/foreach}
			</table>
		</div>
		<div class="col-md-6 ox">
			<div class="container">
				<div class="row centered-form">
					<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-1">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Edit User</h3>
							</div>
							<div class="panel-body">
								<form role="form" method="POST" action="actions/editUser.php">
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
											<input type="text" name="firstname" id="fm" class="form-control input-sm" placeholder="First Name" required/>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="lastname" id="lm" class="form-control input-sm" placeholder="Last Name" required/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="em" class="form-control input-sm" placeholder="Email" required/>
										<input type="email" name="oldEmail" id="oem" hidden="hidden"/>
									</div>
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password" id="pw" class="form-control input-sm" placeholder="Password" required/>
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<select name="role" id="role" class="form-control input-sm">
													<option value="1">Administrator</option>
													<option value="2">Editor</option>
												</select>
											</div>
										</div>
									</div>
									<input type="submit" value="Edit" class="btn btn-info btn-block">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
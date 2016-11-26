
<div class="container body">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add new User</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="actions/addUser.php">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
								<input type="text" name="firstname" class="form-control input-sm" placeholder="First Name" required/>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="lastname" class="form-control input-sm" placeholder="Last Name" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control input-sm" placeholder="Email" required/>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="password" name="password" class="form-control input-sm" placeholder="Password" required/>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<select name="role" class="form-control input-sm">
										<option value="1">Administrator</option>
										<option value="2">Editor</option>
									</select>
								</div>
							</div>
						</div>
						<input type="submit" value="Add" class="btn btn-info btn-block">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>	
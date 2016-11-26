
<div class="container body">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add new product Category</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="actions/addProdCat.php" enctype='multipart/form-data'>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Name" required/>
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

<div class="container body">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add new product</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="POST" action="actions/addProd.php" enctype='multipart/form-data'>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Name" required/>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="number" name="price" id="price" class="form-control input-sm" placeholder="Price" step="0.01" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<textarea name="description" id="description" class="form-control input-sm" placeholder="Description" required></textarea>
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group fileUpload btn btn-default">
									<span>Upload Image</span>
									<input type="file" value="Add" name="img" id="img" class="upload" required/>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="checkbox" value="Available" name="available" id="available"/>
									<span>Available</span>
								</div>
							</div>							
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<label>Product Categories</label>
								<div class="form-group checkbox-container">
									{foreach $cats as $cat}
									<input type="checkbox" name="category[{$cat.id}]"/>{$cat.category}<br/>
									{/foreach}
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
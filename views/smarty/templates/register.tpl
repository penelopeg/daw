<!-- Header -->
{include file="head.tpl"}
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Navigation menu -->
		{include file="nav.tpl" field1=$field1 product_categories=$product_categories usermenu=$usermenu}
		</div>
	</div>
<section class="container margintop">
	<div class="panel panel-default">
		<div class="panel-body">
			<h2 id="title">Sign Up</h2>
			<form method="post" action="controllers/registerAction.php">
				<div class="form-group">
					<label for="firstname">First Name:</label>
					<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input your first name" value="{$firstname}" required/>
				</div>
				<div class="form-group">
					<label for="lastname">Last Name:</label>
					<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Input your last name" value="{$lastname}" required/>
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Input your email" value="{$email}" required/>
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="******" required/> 
				</div>
				<div class="form-group">
					<label for="pwd-r">Repeat Password:</label>
					<input type="password" class="form-control" id="pwd-r" name="pwd-r" placeholder="Repeat your password" required/>
				</div>

				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-6"><a href="index.php?page=login" class="btn btn-primary btn-block btn-lg">I have an account!</a></div>
					<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
				</div>
			</form>
		</div>
	</div>
</section>
</div>
<!-- footer -->
{include file="footer.tpl"}

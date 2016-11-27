<h2 id="title">My Information</h2>
<form method="post" action="controllers/saveAction.php">
	<div class="col-md-6">
		<input type="number" class="hidden" name="client_id" value="{$client.id}"/>
		<div class="form-group">
			<label for="firstname">First Name:</label>
			<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Input your first name" value="{$client.firstname}" required/>
		</div>
		<div class="form-group">
			<label for="lastname">Last Name:</label>
			<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Input your last name" value="{$client.lastname}" required/>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Input your email" value="{$client.email}" disabled/>
		</div>
		<div class="form-group">
			<label for="pwd">New Password:</label>
			<input type="password" class="form-control" id="pwd" name="pwd" placeholder="******"/> 
		</div>
		<hr class="colorgraph">
		<div class="row">
			<div class="col-xs-12 col-md-6"><input type="submit" value="Save" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="address">Address:</label>
			<input type="text" class="form-control" id="address" name="address" placeholder="Input your address" value="{$client.address}" required/>
		</div>
		<div class="form-group">
			<label for="city">City:</label>
			<select name="city">
				{foreach $cities as $city}
				{if $city.id == $client.city_id}
				<option value='{$city.id}' selected="selected">{$city.city_name}</option>
				{else}
				<option value='{$city.id}'>{$city.city_name}</option>
				{/if}
				{/foreach}
			</select>
		</div>
		<div class="form-group">
			<label for="country">Country:</label>
			<select name="country">
				{foreach $countries as $country}
				{if $country.id == $client.country_id}
				<option value='{$country.id}' selected="selected">{$country.country_name}</option>
				{else}
				<option value='{$country.id}'>{$country.country_name}</option>
				{/if}
				{/foreach}
			</select>
		</div>
		<div class="form-group">
			<label for="payment_info">Credit card number:</label>
			<input type="text" class="form-control" id="payment_info" name="payment_info" placeholder="Input your payment information" value="{$client.payment_info}" required/>
		</div>
	</div>
</form>
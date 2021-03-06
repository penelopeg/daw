<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php"><img class="logomargin" src="imgs/logos/logo_thumb.png"/></a>
	</div>
	
	<div class="colorlinks collapse navbar-collapse marginnav"  id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li>
				<a href="index.php?page=about">About</a>
			</li>
			<li>
				<a href="index.php?page=shop">Store</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop by Category<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					{foreach from=$product_categories item=$product_category}
					<li>
						<a href="index.php?page=shop&category_id={$product_category.id}">{$product_category.category}</a>
					</li>
					{/foreach}
				</ul>
			</li>
			<li>
				<form class="navbar-form">
					<div class="form-group">
						<input type="text" class="form-control typeahead form-background" name="search">
					</div> 
					<button type="submit" class="btn btn-default">Search</button>
				</form>
			</li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="{$field1.href}">
					<span class="glyphicon glyphicon-log-in"></span> {$field1.name} 
				</a>
			</li>
			{if !empty($usermenu)}
			<li>
				<a href="{$usermenu.href}">
					<span class="glyphicon glyphicon-cog"></span> {$usermenu.name}
				</a>
			</li>
			{else}
			<li>
				<a href="index.php?page=register">
					<span class="glyphicon glyphicon-user"></span> Register
				</a>
			</li>
			{/if}
			<li>
				<a href="index.php?page=cart">
					<span class="glyphicon glyphicon-shopping-cart"></span> Your cart
				</a>
			</li>
		</ul>
	</div>
</nav>

{if $alert!='none'}
	<div class="alert alert-danger animated fadeInUp alert">{$alert}</div>
{else}
	<div class="alert alert-danger animated fadeInUp alert hidden"></div>
{/if}

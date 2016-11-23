<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button> <a class="navbar-brand" href="index.php">Geekin' Out</a>
	</div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Sales!</a>
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
				<form class="navbar-form" role="search">
					<div class="form-group">
						<input type="text" class="form-control">
					</div> 
					<button type="submit" class="btn btn-default">
						Search
					</button>
				</form>
			</li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li >
				<a href="{$field1.href}">
					<span class="glyphicon glyphicon-user" aria-hidden="true"/>
					 {$field1.name}
				</a>
			</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"/>
				</a>
			</li>
		</ul>
	</div>
</nav>
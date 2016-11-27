<?php
/* Smarty version 3.1.30, created on 2016-11-27 15:12:27
  from "/var/www/html/ecommerce_daw/views/smarty/templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583ae9cb175006_12768374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e35d8e8928fed690d8ee4ec8df5a0f1b396b7561' => 
    array (
      0 => '/var/www/html/ecommerce_daw/views/smarty/templates/footer.tpl',
      1 => 1480255943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583ae9cb175006_12768374 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="margintop container-fluid footer">
	<div class="row footer marginfooter">
		<div class="col-md-4">
			<dl>
				<dt class="titlebackground">
					About Geekin' Out
				</dt>
				<dd>
					Geeking out is a ecommerce website that allows you to buy the best geeky presents for everyone in your life:
				</dd>
				<dt>
					Your friend, your cousin, your aunt!
				</dt>
				<dd>
					Find perfect gifts you can't find anywhere else on the planet (and in fact, the whole universe)!
				</dd>
				<dd>
					May the force be with you!
				</dd>
			</dl>
		</div>
		<div class="col-md-4 links">
			<dl>
				<dt class="titlebackground">
					Vortex of links
				</dt>
				<p>
					<a href="index.php">Home</a>
				</p>
				<p>
					<a href="index.php?page=about">About us</a>
				</p>
				<p>
					<a href="index.php?page=shop">Shop</a>
				</p>
				<p>
					<a href="index.php?page=cart">Your cart</a>
				</p>
			</dl>
		</div>
		<div class="col-md-4">
			<dt class="titlebackground">
				Contact us
			</dt>

			<address>
				 <strong class="titlebackground">Geekin' Out, Inc.</strong><br /> Hogwarts, Inside the Narnia Closet<br /> Neverland, CA 94107<br /> <abbr title="Phone">P:</abbr> (999) 999-99999 <br /> Email: <a href="mailto:info@geekinout.land">info@geekinout.land</a>
			</address>
		</div>
	</div>

	<div class="row links footer">
		<p class="col-sm-6 titlebackground">© 2016 Desenvolvimento de Aplicações Web</p>
		<p class="col-sm-6 text-right titlebackground">Designed by Penélope Gonçalves
		<a href="index.php?page=backoffice" alt="Backoffice"><span class="glyphicon glyphicon-cog">
			</span></a>
		</p>
	</div>
</div>

<!--Sometimes it's better to call scripts after loading every element of the page -->
<?php echo '<script'; ?>
 src="js/handler.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/typeahead.min.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}

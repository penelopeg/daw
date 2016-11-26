$(document).ready(function($) 
{
	$('.clickable-row').hover(function() {
		$(this).addClass('clickable-row-border');
	}, function() {
		$(this).removeClass('clickable-row-border');
	}).click(function(event) {
		$('#fm').val($(this).children('td').first().text());
		$('#lm').val($(this).children('td').first().next().text());
		$('#em').val($(this).children('td').first().next().next().text());
		$('#oem').val($(this).children('td').first().next().next().text());

		var role = $(this).children('td').first().next().next().next().html()
		if(role=='admin')
			role = 1;
		else
			role = 2;
		$('#role').val(role);
	});;

	$('.prod').click(function(event) {
		$('#name').val($(this).children('td').first().text());
		$('#price').val(parseInt($(this).children('td').first().next().text()));
		$('#description').val($(this).children('td').first().next().next().text());
		$('#id').val($(this).children('td').first().next().next().next().next().text());
	});

	$('.alert').delay(1500).slideToggle('500');
});
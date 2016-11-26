$(document).ready(function($) {

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

	/* When clicking product row, get information from row to form */
	$('.prod').click(function(event) {
		$('#name').val($(this).children('td').first().text());
		$('#price').val(parseFloat($(this).children('td').first().next().text()));
		$('#description').val($(this).children('td').first().next().next().text());
		$('#id').val($(this).children('td').first().next().next().next().next().text());
		$('#available').attr('checked', false);
		var available = $(this).children('td').first().next().next().next().next().next().text();
		if(available=='Yes')
			$('#available').attr('checked', 'checked');
	});

	/*Message box delay*/
	$('.alert').delay(1500).slideToggle('500');

	/* Change order status */
	$('.status').change(function(event){
	var status_id = $(this).val();
	var order_id = $(this).parent().parent().find('.orderid').html();
	$.ajax({
		url: '../backoffice/actions/editStatus.php',
		data: 'status_id='+status_id+'&order_id='+order_id,
		success: function(data) {
			location.reload();
		}
	});
});
});
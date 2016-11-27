$(document).ready(function($) {

	/*Unchecks all product categories*/
	function unCheck() {
		$('input:checkbox').each(function(index, el) {
			$(this).attr('checked', false);		
		});
	}

	/*Table rows*/
	$('.clickable-row').hover(function() {
		$(this).addClass('clickable-row-border');
	}, function() {
		$(this).removeClass('clickable-row-border');
	}).click(function(event) {
		/*Gets user information*/
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
		unCheck();
		$('#name').val($(this).children('td').first().text());
		$('#price').val(parseFloat($(this).children('td').first().next().text()));
		$('#description').val($(this).children('td').first().next().next().text());
		var id = $(this).children('td').first().next().next().next().next().text();
		$('#id').val(id);
		$('#available').attr('checked', false);
		var available = $(this).children('td').first().next().next().next().next().next().text();
		if(available=='Yes')
			$('#available').attr('checked', 'checked');
		$.ajax({
			url: '../backoffice/actions/getProdCat.php',
			data: 'id='+id,
			dataType: 'json',
			cache: false,
			success: function(data) {
				$.each(data, function(key, val) {
					$('#c'+val).attr('checked', 'checked');
				});
			}
		});		
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
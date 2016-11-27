/* Add items to cart */
$('.addcart').click(function(event){
	var id = $(this).parent().find('.product-id').html();
	var quant = $(this).parent().find('.quant').val();
	$.ajax({
		url: 'controllers/add_to_cart.php',
		data: 'id='+id+'&quant='+quant,
		success: function(data) {
			$('.alert').html(data).removeClass('hidden').fadeIn('fast').delay('1000').fadeOut('slow');
		}
	});
});

/* Change quantity on cart */
$('.change-quantity').change(function(event){
	var id = $(this).parent().parent().find('td').find('.product-id').html();
	var quant = $(this).val();
	$.ajax({
		url: 'controllers/change_quantity.php',
		data: 'id='+id+'&quant='+quant,
		success: function(data) {
			location.reload();
		}
	});
});

/* Remove items from cart */
$('.removecart').click(function(event){
	var id = $(this).parent().find('.product-id').html();
	$.ajax({
		url: 'controllers/remove_from_cart.php',
		data: 'id='+id,
		success: function(data) {
			location.reload();
		}
	});
});

/* Search function */
$(document).ready(function(){
	$('.typeahead').typeahead({
		name: 'typeahead',
		remote:'controllers/search.php?key=%QUERY',
		limit : 30
	});
});

/* Alert message box display*/
$('.alert').delay(1500).slideToggle('500');

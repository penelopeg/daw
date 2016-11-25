$('.addcart').click(function(event){
	var id = $(this).parent().find('.product-id').html();
	var quant = $(this).parent().find('.quant').val();
	$.ajax({
		url: 'controllers/add_to_cart.php',
		data: 'id='+id+'&quant='+quant,
		success: function(data) {
			$('#added').addClass("has-success animated fadeInUp");
			$('#added').html(data);
		}
	});
});



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


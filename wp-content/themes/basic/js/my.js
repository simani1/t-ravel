$(document).ready(function() {
	$(".products .product").on("mouseover", function(e) {
		$(this).find('.add_to_cart_button').css('visibility', 'visible');
	});

	$(".products .product").on("mouseout", function(e) {
		$(this).find('.add_to_cart_button').css('visibility', 'hidden');
	});

	$(".products .product").on("click", function(e) {
		$('.modal').find('.modal-title').text($(this).find('.product-details h3').text());
		$('.modal').find('.productImage').attr('src', $(this).find('img').attr('src'));
		$('.modal').find('.productPrice').text($(this).find('.product-details .amount').text());
		$('.modal').find('.productExcerpt').text($(this).find('.product-details .excerpt').text());
		$('.modal').find('.btn-primary').attr('onclick', "javascript:location.href='" + $(this).find('.add_to_cart_button').attr('href') + "'");
		$('.modal').modal('show');
		e.preventDefault();
	});

});

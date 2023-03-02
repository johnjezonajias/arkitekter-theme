jQuery(window).load(function() {
	var $mason = jQuery('.ms-item');
  		$mason.fadeIn();

	var container = document.querySelector('#ms-container');
	var msnry = new Masonry( container, {
		itemSelector: '.ms-item',
		columnWidth: '.ms-item',
		gutter: 30
	});

	jQuery('.ext').on('click', function(event) {
		event.preventDefault();
		jQuery('body').addClass('lity-link');
	});
});

jQuery(document).on('lity:close', function(event, instance) {
	jQuery('body').removeClass('lity-link');
});
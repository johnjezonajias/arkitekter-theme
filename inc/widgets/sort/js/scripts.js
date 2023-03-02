jQuery(window).load(function() {

	var pageSliderWrap = jQuery('<div id="page-slider-wrap"></div>');
	var originalGridListContent = jQuery('#content #main #post-9');
	jQuery('#menu-item-30 > a').replaceWith('<div id="filters" class="button-group"></div>');
	jQuery('#menu-item-30 div#filters').append('<button class="buttons" data-filter="*">Referencer</button>');

	jQuery('#menu-item-30 .sub-menu').attr('id', 'filters');
	jQuery('#menu-item-30 .sub-menu').addClass('button-group');

	jQuery('#menu-item-30 #menu-item-66 a').replaceWith('<button class="button" data-filter=".skoler-institutioner">Skoler & Institutioner</button>');
	jQuery('#menu-item-30 #menu-item-67 a').replaceWith('<button class="button" data-filter=".bolig">Bolig</button>');
	jQuery('#menu-item-30 #menu-item-65 a').replaceWith('<button class="button" data-filter=".erhverv">Erhverv</button>');

	var $grid = jQuery('.grid').isotope({
		itemSelector: '.element-item',
		layoutMode: 'masonry',
		masonry: {
			gutter: 0
		}
	});

	jQuery('ul#filters').on( 'click', 'button', function() {
		jQuery('.grid').addClass( 'activated-grid' );
		if( jQuery( 'body' ).hasClass('clonepages-activated') ) {
			jQuery( '#page-slider-wrap' ).replaceWith(pageSliderWrap);
			jQuery( '.external-content-article' ).remove();
			jQuery( 'body' ).removeClass( 'clonepages-activated' );
			jQuery('.grid').isotope({
				itemSelector: '.element-item',
				layoutMode: 'masonry',
				masonry: {
					gutter: 0
				}
			});
			jQuery('#content #main #post-9').show();
		}

		var filterValue = jQuery( this ).attr('data-filter');
		filterValue = filterValue;
		$grid.isotope({ filter: filterValue });
	});

	jQuery('div#filters').on( 'click', 'button', function() {
		jQuery('.grid').addClass( 'activated-grid' );
		if( jQuery( 'body' ).hasClass('clonepages-activated') ) {
			jQuery( '#page-slider-wrap' ).replaceWith(pageSliderWrap);
			jQuery( '.external-content-article' ).remove();
			jQuery( 'body' ).removeClass( 'clonepages-activated' );
			jQuery('.grid').isotope({
				itemSelector: '.element-item',
				layoutMode: 'masonry',
				masonry: {
					gutter: 0
				}
			});
			jQuery('#content #main #post-9').show();
		}

		var filterValue = jQuery( this ).attr('data-filter');
		filterValue = filterValue;
		$grid.isotope({ filter: filterValue });
	});

	jQuery('.button-group').each( function( i, buttonGroup ) {
		var $buttonGroup = jQuery( buttonGroup );
		$buttonGroup.on( 'click', 'button', function() {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			jQuery( this ).addClass('is-checked');
		});
	});

	jQuery('div#filters').click(function() {
	  	jQuery('ul#filters').find('.is-checked').removeClass('is-checked');
	});

	jQuery('.element-item > a').on('click', function(event) {
		location.hash = '#!/' + jQuery(this).attr('id');
		event.preventDefault();
		var thisURL = jQuery(this).attr('href');
		if( !(thisURL == '#') ) {
			jQuery.ajax({
		       url: thisURL,
		       type: 'GET',
		       dataType: 'html',
		       data: content,
		       processData: false,
		       success: function(data) {
		       		var siteDataRevSlider = jQuery( data ).find( '#page-slider-wrap' );
		       		var siteDataContent = jQuery( data ).find( '#content article' ).addClass( 'external-content-article' );
		       		window.scrollTo(0,0);
		       		jQuery( '#page-slider-wrap' ).replaceWith( siteDataRevSlider[0] );
		       		jQuery( '#content #main' ).prepend( siteDataContent[0] );
		       		jQuery('#content #main #post-9').hide();
		       		jQuery( 'body' ).toggleClass( 'clonepages-activated' );
		       	}
	     	});
		}
	});
});

jQuery(document).ready(function($) {

  if (window.history && window.history.pushState) {

    $(window).on('popstate', function() {
      var hashLocation = location.hash;
      var hashSplit = hashLocation.split("#!/");
      var hashName = hashSplit[1];

      if (hashName !== '') {
        var hash = window.location.hash;
        if (hash === '') {
        		//alert( 'click back' );

						var pageSliderWrap = jQuery('<div id="page-slider-wrap"></div>');
						var originalGridListContent = jQuery('#content #main #post-9');

						var $grid = jQuery('.grid').isotope({
							itemSelector: '.element-item',
							layoutMode: 'masonry',
							masonry: {
								gutter: 0
							}
						});

						jQuery('.grid').addClass( 'activated-grid' );
						if( jQuery( 'body' ).hasClass('clonepages-activated') ) {
							jQuery( '#page-slider-wrap' ).replaceWith(pageSliderWrap);
							jQuery( '.external-content-article' ).remove();
							jQuery( 'body' ).removeClass( 'clonepages-activated' );
							jQuery('.grid').isotope({
								itemSelector: '.element-item',
								layoutMode: 'masonry',
								masonry: {
									gutter: 0
								}
							});
							jQuery('#content #main #post-9').show();
						}

						var filterValue = jQuery( this ).attr('data-filter');
						filterValue = filterValue;
						$grid.isotope({ filter: filterValue });

        }
      }
    });

    //window.history.pushState('forward', null, '');
  }

});
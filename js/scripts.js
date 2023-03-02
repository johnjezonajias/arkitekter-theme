(function($) {
	/** Detect IE Browser **/
	var ua = window.navigator.userAgent;
	var edge = ua.indexOf('Edge/');
	if(edge > 0) {
		$("body").addClass("browser-ie");
	}

	/** Hamburger Menu **/
	var $hamburger = $(".hamburger");
	$hamburger.on("click", function(e) {
	    $hamburger.toggleClass("is-active");
		$(".mobile-navigation").toggleClass("show-mobile-menu");
		$("body").toggleClass("mobile-menu-down");
	});

	/*$("#mobile-menu .menu-item-has-children .sub-menu ul").addClass('sub-menu-sub');
	$("#mobile-menu .menu-item-has-children .sub-menu ul").removeClass('sub-menu');

	$("#mobile-menu .menu-item-has-children > a").on('click', function(e) {
		e.preventDefault();
		if( $(this).parent('#mobile-menu .menu-item-has-children').hasClass('collapsed-mobile-submenu') ) {
			$(this).parent('#mobile-menu .menu-item-has-children').find(".sub-menu").slideUp();
			$(this).parent('#mobile-menu .menu-item-has-children').find(".sub-menu").toggleClass("show-mobile-submenu");
			$(this).parent('#mobile-menu .menu-item-has-children').toggleClass("collapsed-mobile-submenu");
			return false;
		}

		$(this).parent('#mobile-menu .menu-item-has-children').toggleClass("collapsed-mobile-submenu");
		$(this).parent('#mobile-menu .menu-item-has-children').find(".sub-menu").slideDown();
		$(this).parent('#mobile-menu .menu-item-has-children').find(".sub-menu").toggleClass("show-mobile-submenu");
		$(this).parent('#mobile-menu .menu-item-has-children').siblings('li').find(".sub-menu").slideUp();
		$(this).parent('#mobile-menu .menu-item-has-children').siblings('li').find(".sub-menu").removeClass("show-mobile-submenu");
		$(this).parent('#mobile-menu .menu-item-has-children').siblings('li').removeClass("collapsed-mobile-submenu");
	});

	$("#mobile-menu ul.sub-menu .menu-item-has-children > a").on('click', function(e) {
		e.preventDefault();
		if( $(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').hasClass('collapsed-mobile-submenu-sub') ) {
			$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').find(".sub-menu-sub").slideUp();
			$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').find(".sub-menu-sub").toggleClass("show-mobile-submenu");
			$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').toggleClass("collapsed-mobile-submenu-sub");
			return false;
		}

		$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').toggleClass("collapsed-mobile-submenu-sub");
		$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').find(".sub-menu-sub").slideDown();
		$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').find(".sub-menu-sub").toggleClass("show-mobile-submenu");
		$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').siblings('li').find(".sub-menu-sub").slideUp();
		$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').siblings('li').find(".sub-menu-sub").removeClass("show-mobile-submenu");
		$(this).parent('#mobile-menu ul.sub-menu .menu-item-has-children').siblings('li').removeClass("collapsed-mobile-submenu-sub");
	});*/

	/** Back to Top Button **/
	if ($('#back-top').length) {
	    var scrollTrigger = 300,
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-top').addClass('show');
            } else {
                $('#back-top').removeClass('show');
            }
        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });
	}
}(jQuery));
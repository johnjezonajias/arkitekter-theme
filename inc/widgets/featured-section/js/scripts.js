jQuery( function() {
  // Cache selectors
  var lastId;
  var topMenu = jQuery("#menu-item-28");
  var topMenuHeight = topMenu.outerHeight()+168;

  // All list items
  var menuItems = topMenu.find('.sub-menu a[href^="#"]');

  // Anchors corresponding to menu items
  var scrollItems = menuItems.map(function(){
    var item = jQuery(jQuery(this).attr("href"));
    if (item.length) { return item; }
  });

  // Global smooth scroll
  jQuery( 'a[href^="#"]' ).on( 'click',function( event ){
    event.preventDefault();
    var target_offset = jQuery( this.hash ).offset() ? jQuery( this.hash ).offset().top : 0;
    var customoffset = 192;
    jQuery( 'html, body' ).animate( {scrollTop:target_offset - customoffset}, 1000 );
    jQuery(this).parent('li').siblings().removeClass('focus');
  });

  // Bind click handler to menu items
  // so we can get a fancy scroll animation
  menuItems.click(function(e){
    var href = jQuery(this).attr("href"),
        offsetTop = href === "#" ? 0 : jQuery(href).offset().top-topMenuHeight+1;
    jQuery('html, body').stop().animate({ 
        scrollTop: offsetTop
    }, 1000);
    e.preventDefault();
  });

  // Bind to scroll
  jQuery(window).scroll(function(){
     // Get container scroll position
     var fromTop = jQuery(this).scrollTop()+topMenuHeight;    
     // Get id of current scroll item
     var cur = scrollItems.map(function(){
       if (jQuery(this).offset().top < fromTop)
         return this;
     });
     // Get the id of the current element
     cur = cur[cur.length-1];
     var id = cur && cur.length ? cur[0].id : "";
     
     if (lastId !== id) {
         lastId = id;
         // Set/remove active class
         menuItems
           .parent().removeClass("focus")
           .end().filter("[href='#"+id+"']").parent().addClass("focus");
     }
  });
});
jQuery(function ($) {
    'use strict';

    //Sticky Menu
    $('#nav-full').affix({
      offset: {
          top: $('#nav-full').offset().top
      }
    });
  
  	$('.home #bs-example-navbar-collapse-1 a').on('click',function(e) {
        if (e != null) e.preventDefault();
        var link = $(this).attr("href");
      	$('.home #bs-example-navbar-collapse-1 a.active').removeClass('active');
      	$(this).addClass('active');
        
      	if (link.indexOf("#")) {
          var sub = link.slice(link.indexOf("#"), link.length);
          $('html, body').stop(true, true).animate({
              scrollTop: $(sub).offset().top - 40
            }, 1000);
        }
    });

    // Team Slider Js
     $("#team-demo").owlCarousel({
         autoPlay: true, //Set AutoPlay to 3 seconds
         items: 2,
         pagination: true
     });

    $("#owl-demo").owlCarousel({
      	autoPlay: true,
        navigation: true,
      	pagination: false,
      	navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 1,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false
    });

    $(".team-carousel").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        items: 4,
        navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
          	1000: {
                items: 4
            }
        }
    });
  
  	$(".ink-img").on('click', function(){
    		var img = $(this);
      	var title = img.find('._post-title').html();
      	var content = img.find('._post-content').html();
      
      	$('#instruktorer-modal .modal-title').html(title);
      	$('#instruktorer-modal .modal-body').html(content);
    });
  	
  	$('.instruk-title').on('click', function(){
		    $(this).parent().parent().find('.ink-img').click();
    });
  	// End of jquery
});

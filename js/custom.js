/*var wid = $(window).width(),
hei = $(window).height();
alert("width:" + wid +"px and height: " + hei + "px.")
*/

$(document).ready(function() {
	/*function bannerheight(){
	    var head_height = $("header").outerHeight(true);
	    $("body").css("padding-top",head_height + "px")
		$(".banner-sec").css("min-height","calc(100vh - " + head_height + "px)")
	};
	bannerheight();
	$(window).resize(bannerheight);*/

    $(".navbar-toggler").click(function() {
        $('html').toggleClass('show-menu');
    });
   
    function scrolling(){
	    var sticky = $('header'),
	        scroll = $(window).scrollTop();

	    if (scroll >= 15) sticky.addClass('fixed');
	    else sticky.removeClass('fixed');
	};
	scrolling();
	$(window).scroll(scrolling);

    // hide #back-top first
    $("#myBtn").hide();

    // fade in #back-top
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#myBtn').fadeIn();
            } else {
                $('#myBtn').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#myBtn').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    });

});


//cursor
$('#money').owlCarousel({
  loop: true,
  // margin: 10,
  nav: false,
dots:false,
  autoplay: true,
  autoplayHoverPause: false,
    navText: ["<img src='assets/images/whitebgleft.svg'>","<img src='assets/images/whitebgright.svg'>"],
  
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
})


$('#mansarona').owlCarousel({
  loop: true,
  nav: true,
  dots:false,
  margin: 10,    
  autoplayTimeout: 4000,
  smartSpeed: 400,
  autoplay: true,
  center: true,
  navText: ["<img src='assets/images/arrow-left-slider.svg'>","<img src='assets/images/arrow-right-slider.svg'>"],

  responsive: {
      0: {
          items: 1,
      }
  }
});




$('.menu').click (function(){
  $(this).toggleClass('open');
});

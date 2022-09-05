/*$(window).scroll(function(){
	body = document.querySelector("body");
	if ($(this).scrollTop() > 20){
	$('body').addClass("scroll-header");
	}
	else{
	$('body').removeClass("scroll-header");
	}
});

$(document).ready(function(){
  $(".navbar-nav > li > a").on('click', function(event) {
    if (this.hash !== "") {
	  url = window.location.href.substr(0, window.location.href.indexOf('#'));
	  link1 = this.href.substr(0, this.href.indexOf('#'));
	  if(url == link1){
		  event.preventDefault();
		  var hash = this.hash;
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){   
			window.location.hash = hash;
		  });
	  }
      
    }
  });
});*/
$(document).ready(function(){
  $("header .navbar-collapse .navbar-nav .nav-link").click(function(){
    $("#mainMenu").removeClass("show");
  });
});

$('.owl-carousel').owlCarousel({
    loop:true,
	autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    margin:0,
    nav:true,
	dots: false,
    responsive:{
        0:{
            items:1,
			stagePadding: 10
        },
        600:{
            items:2,
			stagePadding: 10
        },
		600:{
            items:2,
			stagePadding: 10
        },
        1000:{
            items:4
        }
    }
})
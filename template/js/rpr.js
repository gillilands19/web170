$(document).ready(function(){
    
    $('#confirm-close').visible(function(){
        $('#progress-loader').hide();
    });
    
    $(".menu-collapsed").click(function() {
  $(this).toggleClass("menu-expanded");
    });
        $(".logo-hide").click(function() {
  $(".logo").toggle();
    });
        $(window).on('resize',function(){
     if($(this).width()>767)
        $('.menu-expanded').toggleClass('menu-expanded');
    });
        $(window).on('resize',function(){
     if($(this).width()>767)
        $('.logo').show();
    });
    
    $("#about-button").click(function (){
                $('html, body').animate({
                    scrollTop: $("#about-button").offset().top
                }, 1000);
            });


$(window).scroll(function(){
    if ($(window).scrollTop() > 50){
      $('#nav-bar').addClass('nav-sticky').removeClass('logo-nav-header');
    } else {
        $('#nav-bar').addClass('logo-nav-header').removeClass('nav-sticky');
    }
  });
    
    $('.work-thumb-one').hover(function(){
       $("#image-title-one").toggle(); 
    });
    
     $('.work-thumb-two').hover(function(){
       $("#image-title-two").toggle(); 
    });
    
     $('.work-thumb-three').hover(function(){
       $("#image-title-three").toggle(); 
    });
    
	
});
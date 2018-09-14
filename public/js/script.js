

$(document).ready(function () {
    $('.banner_slider').slick({
        dots: false,
        infinite: false,
        arrows: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
         autoplaySpeed: 2000,
       
    });

    
  $('.venobox').venobox({

        spinner: 'three-bounce',
      /* spinColor: 'darkmagenta',*/
       spinColor:'white',
        overlayClose: 'true',
        border: '2px',
        overlayColor: 'rgba(255,127,39,0.85)'

    });
    
    
    
    
    /* $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
    
    
    
 

    $(".dropdown-toggle").dropdown('toggle');*/
    
    
    
$('.team_profile').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.team_img_slide'
});
    
$('.team_img_slide').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.team_profile',
  dots: false,
    arrows:false,
    centerPadding:'0px',
  centerMode: true,
  focusOnSelect: true,
    
});
    
    
    
    
    
  

  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});



 
    
    
    
    
    

   
    
    
    
    















/*(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);


$().ready(function() { 
    $('#wrapper').tubular({videoId: 'https://youtu.be/Sg6RiJU8XTw'}); 
    // where idOfYourVideo is the YouTube ID. }); 



});*/



/*(function($){
    
    
    $(document).ready(function() { 
    $('#wrapper').tubular({videoId: 'https://youtu.be/Sg6RiJU8XTw'}); 
    // where idOfYourVideo is the YouTube ID. }); 



});
});*/
    
    
//$(function(){
    
    
 /*  $('#wrapper').tubular({videoId: '7a_CVFRqYv4'});
    
});  */



(function($) {
    $(function(){

/* Mobile menu */
    	$('#block-block-8 .content a').click(function(e){

    		e.preventDefault();

    		$('body').toggleClass('slide');

    	});
/* Mobile menu End*/

/* slider mobile */
   
	if($(window).width()<767)
	{
		logoSlider();
	}

	$(window).resize(function()
	{
		if($(window).width()<767)
		{
			logoSlider();
		}
		else
		{
			$('#block-block-2  .view-content, .view-events .view-content').slick('unslick');
		}
	});

	function logoSlider()
	{

	 	$('#block-block-2  .view-content, .view-events .view-content').slick(
        {
          dots: false,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
         }); 
	}
/* Slider Mobile End */

/* Fix Header */
	
 	var t = $("#block-system-main-menu").offset().top;
	$(document).scroll(function()
	{
	    if($(this).scrollTop()-30 > t)
	    {   
			$('body').addClass('fix');
		
	    }

	    else
	    {	

	    	$('body').removeClass('fix');
	
	    }
	});

/* Fix Header End */

	   $('#block-system-main-menu a[href*=#]').on('click',function (e) 
		{	
			if($(window).width()<767)
			{
				 e.preventDefault();

			    var target = this.hash;
			    var $target = $(target);

			    $('html, body').stop().animate({
			        'scrollTop': $target.offset().top-100
			    }, 400, 'swing', function () {
			        window.location.hash = target;
			    });
			    $('body').removeClass('slide');
			}else
			{
				e.preventDefault();

			    var target = this.hash;
			    var $target = $(target);

			   $('html, body').stop().animate({
                'scrollTop': $target.offset().top-100
              }, 400);
			}
		   
		});

	   /* Wrap event boxes */
	   var divs = $("#block-views-events-block .view-content > .views-row");
        for(var i = 0; i < divs.length; i+=3) 
        {
            divs.slice(i, i+3).wrapAll("<div class='box'></div>");
        }

   });

}(jQuery));
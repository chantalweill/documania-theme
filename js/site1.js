$(window).load(function() {
	
    $('#hpslider').nivoSlider();

});


$(document).ready(function(){
	
    $.ajaxSetup({cache:false});
    
	$("a.withloader").click(function(){
		var post_id = $(this).attr("rel");
        var post_url = "http://documaniafilms.com/site/?p="+post_id;
 
        $("#post").html("loading...");
 
    	$("#post").load(post_url, function() {
			$( '.singlepgslider' ).anythingSlider({
			  	buildArrows         : false,      // If true, builds the forwards and backwards buttons 
			  	buildNavigation     : true,      // If true, builds a list of anchor links to link to each panel 
			  	buildStartStop      : false,      // If true, builds the start/stop button 
				resizeContents      : true,
				addWmodeToObject    : 'transparent',
				navigationFormatter : function(index, panel){
    				return " Slide " + index; // This would have each tab with the text 'Panel #X' where X = index
  				}
			});
		});
 
		window.location.hash = post_id;
		return false;
    });


 		$('.carousel').carousel({
            interval: false,
            cycle: false,
            pause: true,
        });


		$('.home-carousel').carousel({
            interval: 9000,
        });


		$(".carousel-nav a").click(function(e){
            e.preventDefault();
            var index = parseInt($(this).attr('data-to'));
            $('#myCarousel').carousel(index);
            var nav = $('.carousel-nav');
            var item = nav.find('a').get(index);
            nav.find('a.active').removeClass('active');
            $(item).addClass('active');
			$(item).parent().addClass('active');
        });


		$("#past a").click(function(e){
            e.preventDefault();
            var index = parseInt($(this).attr('data-to'));
            $('#myCarousel').carousel(index)+1;
            var nav = $('.carousel-nav');
            var item = nav.find('a').get(index);
        });


		$("#inpro a").click(function(e){
            e.preventDefault();
            var index = parseInt($(this).attr('data-to'));
            $('#myCarousel').carousel(index);
            var nav = $('.carousel-nav');
            var item = nav.find('a').get(index);
        });


		$("#advocacy a").click(function(e){
            e.preventDefault();
            var index = parseInt($(this).attr('data-to'));
            $('#myCarousel').carousel(index);
            var nav = $('.carousel-nav');
            var item = nav.find('a').get(index);
        });


		$('.dropdown-toggle').dropdown();
		
		
		$('.dropdown-menu').find('form').click(function (e) {
    		e.stopPropagation();
  		});
		
		$('.alsocollapse').click(function(){
            $('.accordion-body.in').collapse('toggle');
        });

    	
		
		var windowHeight;
    	windowHeight = window.innerHeight;
		document.getElementById("#navheight").height = windowHeight;
		
});
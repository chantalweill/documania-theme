$(window).load(function() {
	$('.theme-default .nivoSlider').css({height: '360px'});
    $('#hpslider').nivoSlider(
		{
			effect: 'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
        	animSpeed: 200, // Slide transition speed
        	pauseTime: 7000, // How long each slide will show		
		});

});


$(document).ready(function(){
	
    $.ajaxSetup({cache:false});
    
	$("a.withloader").click(function(){ 
		var post_id = $(this).attr("rel");
		OKMan(post_id); 
	});
	
	
	function OKMan(idvar) {	
		
        var post_url = "http://documaniafilms.com/site/?p="+idvar;
 		var thumbie = ""
        $("#post").html("loading...");
 	

    	$("#post").load(post_url, function() {		

			$( '.singlepgslider' ).anythingSlider({
			  	buildArrows         : false,      // If true, builds the forwards and backwards buttons 
			  	buildNavigation     : true,      // If true, builds a list of anchor links to link to each panel 
			  	buildStartStop      : false,      // If true, builds the start/stop button 
				resizeContents      : true,
				addWmodeToObject    : 'transparent',
				navigationFormatter : function(i, panel){ // add thumbnails as navigation links
					var testers = panel.children(":first")
						jQuery.each(testers, function() {
							var me = this
							    if (me == "[object HTMLImageElement]") {
									thumbie = panel.find('img').attr('src');
								}
							    if (me != "[object HTMLImageElement]") {
									thumbie = "http://documaniafilms.com/site/wp-content/themes/documania/img/vimeo-thumb-generic.png";
								}
						});
						return "<img width='90px' src='" + thumbie + "'>";
				}
			});
			
			$("a.withloader").click(function(){ 
			var newpost_id = $(this).attr("rel");
			OKMan(newpost_id); 
			});
			
			$(".slider-in-carousel a").click(function(e){ 
        	    e.preventDefault();
        	    var index = parseInt($(this).attr('data-to'));
        	    $('#myCarousel').carousel(index);
        	});	
		}); 
 
		window.location.hash = idvar;
		return false;
    };


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

		$(".slider-in-carousel a").click(function(e){ 
            e.preventDefault();
            var index = parseInt($(this).attr('data-to'));
            $('#myCarousel').carousel(index);
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
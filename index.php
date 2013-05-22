<?php 
/**
 * The Layout for the Main Carousel
 *
 * Displays all 
 *
 */

get_header(); ?>


<body class="mania">
 <div class="wrapper">
	

    <div class="container clearfix addlogo">
	 	<div id="topright">
				<ul class="mini-social clearfix">
					<li><a href="mailto:hello@documania.com"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon-em.png"  alt="Email Us"></a></li>
					<li><a href="http://www.facebook.com"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon-fb.png"  alt="Our Facebook Page"></a></li>
					<li><a href="https://twitter.com"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon-tw.png"  alt="Visit us on Twitter"></a></li>
			</ul>
		</div> 
      <!-- Main carousel -->
    <div id="myCarousel" class="carousel slide pull-right  fadee" style="width:990px;">
	<!-- Carousel items -->
	
    	<div class="carousel-inner" >
<!--======================================================================-->
<!--=============================Home Page===============================-->	
<!--======================================================================-->					
    			<div id="home"  class="active item">

					<!-- Nivo Slider Carousel start -->
					<div class="slider-wrapper theme-default"><?php echo $mykey_slider[0]; ?>
    					<div id="hpslider" class="nivoSlider slider-in-carousel"> 	
								
	
<?php $featured_query = new WP_Query('meta_key=homepage-slider'); 
while ($featured_query->have_posts()) : $featured_query->the_post(); 

	  $postid = get_the_ID();
	  $slider =  get_post_custom_values('homepage-slider');?>	
								<a href="#" class="withloader" data-to="10" rel="<?php the_ID(); ?>">
									<img src="<?php echo $slider[0]; ?>" width="925" height="360" alt="<?php the_title() ?>"   />
								</a>
								
<?php endwhile; 
wp_reset_query(); 
?>
    					</div>
					</div>
					<div id="htmlcaption" class="nivo-html-caption">
    					<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
					</div>	
					<!-- Nivo Slider Carousel end -->	

					
				 	 <div class="clearfix" style="width:927px;">
    							<div class="intro pull-left">
									<br><br><br><div class="pna home-lede"><strong class="third-font">We&nbsp;are Documania.</strong> An independent documentary production group based in <em>Los Angeles</em> and <em>New York</em>, home to <em>award-winning filmmaker Jeffrey Tuchman</em> and a growing band of accomplices. </div>
								</div>
    							<div class="callout pull-right">
									<span><strong>Goings On</strong>
										
										
<?php $featured_query = new WP_Query('p=162'); 
while ($featured_query->have_posts()) : $featured_query->the_post(); 
$list_items =  get_post_custom_values('homepage-callout-item');?>

										<ul>
<?php foreach ( $list_items as $list_item => $value ) { ?>
											<li><?php echo $value; ?></li>
<?php } endwhile; 
wp_reset_query(); 
?>											
										</ul>
											
									</span>
								</div>
					 </div>
							
    					
					
				</div>
<!--======================================================================-->
<!--============================About Pages===============================-->	
<!--======================================================================-->					
    			<div id="about" class="item">
					<div class="clearfix"><h2>Bio | <h3> &nbsp;Jeffrey Tuchman</h3></h2>
					</div>
					
					<div class="row clearfix">
<?php $featured_query = new WP_Query('cat=4'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>		
						<div class="span6 ">
<?php $content = get_the_content(); echo $content; ?>

							<div class="logoline">&nbsp;</div>	
							<a class="offsite"  href="http://documaniafilms.com/site/wp-content/uploads/2013/05/JST-bio-Winter-2012.pdf" target="_blank">Download bio and full showlist<span class="lrgr">➷</span></a>
						</div>
<?php endwhile; ?>	

<?php $featured_query = new WP_Query('cat=13'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>	
						<div class="span3 well">
<?php $content = get_the_content(); echo $content; ?>
						</div>
<?php endwhile; ?>						
						
					</div>   <!--closes .row-->
				</div>	<!--closes #about (the first)-->
				
												
    			<div id="about" class="item">
					<div class="clearfix"><h2>Bio | <h3> &nbsp;Jeffrey Tuchman</h3></h2>
					</div>
					
					<div class="row clearfix">
						
<?php $featured_query = new WP_Query('cat=4'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>		
						<div class="span6 ">
<?php $content = get_the_content(); echo $content; ?>

							<div class="logoline">&nbsp;</div>	
							<a class="offsite"  href="http://documaniafilms.com/site/wp-content/uploads/2013/05/JST-bio-Winter-2012.pdf" target="_blank">Download bio and full showlist<span class="lrgr">➷</span></a>
						</div>
<?php endwhile; ?>	
						
<?php $featured_query = new WP_Query('cat=13'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>	
						<div class="span3 well">
<?php $content = get_the_content(); echo $content; ?>
						</div>
<?php endwhile; ?>						
						
					</div>   <!--closes .row-->
				</div>	<!--closes #about (the second)-->
				
								
    			<div id="collab" class="item">
					<div class="clearfix"><h2>Collaborators | <h3> &nbsp;Subtitle</h3></h2>
					</div>

					<div class="row clearfix">
						
<?php $featured_query = new WP_Query('cat=5'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>		
						<div class="span6 ">
<?php $content = get_the_content(); echo $content; ?>

							<div class="logoline">&nbsp;</div>	
							
						</div>
<?php endwhile; ?>	
						
<?php $featured_query = new WP_Query('cat=14'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>	
						<div class="span3 well">
<?php $content = get_the_content(); echo $content; ?>
						</div>
<?php endwhile; ?>						
					</div>   <!--closes .row-->
		
				</div>
									
				
    			<div id="press" class="item">
					<div class="clearfix"><h2>Press | <h3> &nbsp;Subtitle</h3></h2>
					</div>

					<div class="row clearfix">
						
<?php $featured_query = new WP_Query('cat=7'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>		
						<div class="span6 ">
<?php $content = get_the_content(); echo $content; ?>

							<div class="logoline">&nbsp;</div>	
							
						</div>
<?php endwhile; ?>	

<?php $featured_query = new WP_Query('cat=15'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>	
						<div class="span3 well">
<?php $content = get_the_content(); echo $content; ?>
						</div>
<?php endwhile; ?>						
					</div>   <!--closes .row-->
		
				</div>
<!--======================================================================-->
<!--==============================News Page===============================-->	
<!--======================================================================-->					
    			<div id="news" class="item">
					<div class="clearfix"><h2>News | <h3> &nbsp;What's Going On</h3></h2>
					</div>

					<div class="row clearfix">
						<div class="span6">
<?php $featured_query = new WP_Query('cat=8'); while ($featured_query->have_posts()) : $featured_query->the_post();	
$postid = get_the_ID();	 ?>
							<div class="slider-in-carousel">
								<h6><?php the_title(); ?></h6>
<?php $content = get_the_content(); echo $content; ?>
								<a href="#" class="withloader offsite" data-to="10" rel="<?php the_ID(); ?>">Keep Reading &raquo;</a>
                        	
								<div class="logoline">&nbsp;</div>	
								
							</div>
<?php endwhile; ?>	
						</div><!--closes span6-->
						
						<div class="span3 well">
							<h6>Recent News Posts</h6>
<?php
$recentpostsquery = new WP_Query( 'cat=8&posts_per_page=10' );
while($recentpostsquery->have_posts()) : $recentpostsquery->the_post();
$postid = get_the_ID();
?>
							<ul class="recent-posts">
								<li class="slider-in-carousel">
									<a href="#" class="withloader" data-to="10" rel="<?php the_ID(); ?>"><?php the_title(); ?></a>
								</li>
							</ul>
<?php endwhile; ?>
						</div>
					</div>   <!--closes .row-->
		
				</div>

<!--======================================================================-->
<!--============================In Pro Page===============================-->	
<!--======================================================================-->					
    			<div id="inpro" class="item">
					<div class="clearfix"><h2>In Production | <h3> &nbsp;Current Projects</h3></h2>
					</div>
					<div class="clearfix">
<?php $featured_query = new WP_Query('cat=9'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>	
	
<?php $mykey_genre = get_post_custom_values('genre'); 
	  $mykey_thumb = get_post_custom_values('thumb'); 
	  $postid = get_the_ID();
?>
						<div class="tile">
<?php if (isset($mykey_thumb[0])) { ?>				
							<a href="#" class="withloader" data-to="10" rel="<?php the_ID(); ?>"><img src="<?php echo $mykey_thumb[0] ?>" width="300" height="150"></a>
<?php } else { echo " "; } ?>
							<h4><?php the_title(); ?></h4>
							
<?php if (isset($mykey_genre[0])) { ?>				
							<span class="proj-desc"><?php echo $mykey_genre[0] ?></span>
<?php } else { echo " "; } ?>
						</div>
<?php endwhile; wp_reset_query();
?>						
					</div>
	
				</div>
<!--======================================================================-->
<!--============================Past Pro Pages============================-->	
<!--======================================================================-->					
    			<div id="past" class="item">
					<div class="clearfix"><h2>Our Work | <h3> &nbsp;Film &amp; Television</h3></h2>
					</div>
					<div class="clearfix">
<?php $featured_query = new WP_Query('cat=11'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>	
	
<?php $mykey_genre = get_post_custom_values('genre'); 
	  $mykey_thumb = get_post_custom_values('thumb'); 
	  $postid = get_the_ID();
?>
						<div class="tile">
<?php if (isset($mykey_thumb[0])) { ?>				
							<a href="#" class="withloader" data-to="10" rel="<?php the_ID(); ?>"><img src="<?php echo $mykey_thumb[0] ?>" width="300" height="150"></a>
<?php } else { echo " "; } ?>
							<h4><?php the_title(); ?></h4>
							
<?php if (isset($mykey_genre[0])) { ?>				
							<span class="proj-desc"><?php echo $mykey_genre[0] ?></span>
<?php } else { echo " "; } ?>
						</div>
<?php endwhile; wp_reset_query();
?>						
					</div>
					<a class="offsite" href="http://www.imdb.com/" target="_blank">See our IMDB page<span class="lrgr"> ➸</span></a>
	
				</div>	
				
				
								
    			<div id="past" class="item">
					<div class="clearfix"><h2>Our Work | <h3> &nbsp;Film &amp; Television</h3></h2>
					</div>
					<div class="clearfix">
<?php $featured_query = new WP_Query('cat=11'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>	
	
<?php $mykey_genre = get_post_custom_values('genre'); 
	  $mykey_thumb = get_post_custom_values('thumb'); 
	  $postid = get_the_ID();
?>
						<div class="tile">
<?php if (isset($mykey_thumb[0])) { ?>				
							<a href="#" class="withloader" data-to="10" rel="<?php the_ID(); ?>"><img src="<?php echo $mykey_thumb[0] ?>" width="300" height="150"></a>
<?php } else { echo " "; } ?>
							<h4><?php the_title(); ?></h4>
							
<?php if (isset($mykey_genre[0])) { ?>				
							<span class="proj-desc"><?php echo $mykey_genre[0] ?></span>
<?php } else { echo " "; } ?>
						</div>
<?php endwhile; wp_reset_query();
?>	
						
					
					</div>
					<a class="offsite"  href="http://www.imdb.com/" target="_blank">See our IMDB page<span class="lrgr"> ➸</span></a>
				</div>
				
									
    			<div id="advocacy" class="item">
					<div class="clearfix"><h2>Our Work | <h3> &nbsp;Strategic Communications</h3></h2>
					</div>
				
					<div class="row clearfix">
						
						<div class="span5 withvertline">
							<h3 class="newh3"><span class="tapebg">Politics</span></h3>

							
<?php $featured_query = new WP_Query('cat=12'); while ($featured_query->have_posts()) : $featured_query->the_post(); ?>	
	
<?php $mykey_genre = get_post_custom_values('genre'); 
	  $mykey_thumb = get_post_custom_values('thumb'); 
	  $postid = get_the_ID();
?>
							<div class="tile">
<?php if (isset($mykey_thumb[0])) { ?>				
								<a href="#" class="withloader" data-to='11' rel="<?php the_ID(); ?>"><img src="<?php echo $mykey_thumb[0] ?>" width="300" height="150"></a>
<?php } else { echo " "; } ?>
								<h4><?php the_title(); ?></h4>
							
<?php if (isset($mykey_genre[0])) { ?>				
								<span class="proj-desc"><?php echo $mykey_genre[0] ?></span>
<?php } else { echo " "; } ?>
							</div>
<?php endwhile; wp_reset_query();
?>
						</div>
						
						
						
						<div class="span4half">
							
							<h3 class="newh3"><span class="tapebg">Issue Advocacy Media</span></h3>

							<div class="tiletxt">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin orci diam, vehicula id mattis non, mattis non lorem. Suspendisse justo mauris, pulvinar et malesuada ultricies, dictum non ligula. Integer consequat gravida eros sit amet consectetur. Etiam venenatis eleifend velit auctor eleifend. Nam egestas viverra velit sit amet tristique. Suspendisse bibendum urna at dolor posuere sed facilisis nulla scelerisque. Praesent elementum erat a nibh varius dapibus. Nulla at tellus orci, at porta massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi in adipiscing eros. Aenean ultrices congue tellus, non sagittis purus malesuada at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed sem tortor, in vestibulum urna. Praesent sit amet arcu a diam sollicitudin molestie sed vitae risus. 
								</p>
								<span class="proj-desc">Clients include:</span>
								<h4>Name of Client</h4>
								<h4>Name of Client</h4>
								<h4>Name of Client</h4>
								<h4>Name of Client</h4>
								<h4>Name of Client</h4>
								<h4>Name of Client</h4>
								<h4>Name of Client</h4>
							
								
							</div>
				

						</div>
						
					</div>
					<a class="offsite"  href="http://www.imdb.com/" target="_blank">See our IMDB page<span class="lrgr"> ➸</span></a>
	
				</div>
				
<!--======================================================================-->
<!--======= A Project Page - 10 - not used in datato attribute nav =======-->	
<!--======================================================================-->					
    			<div id="past" class="item">
					<div class="clearfix">
						<div id="post"></div>					
						
						
						
						
					</div>
					
				</div>
				
<!--======================================================================-->
<!--========================A Project Page Closed=========================-->	
<!--======================================================================-->					
				
				
				
				
				
<!--======================================================================-->
<!--============================Contact Page==============================-->	
<!--======================================================================-->					
    			<div id="contact" class="item">
					<h2>Contact</h2>
				</div>
				
				
				
				
    	</div>
    </div>
	<!-- Close carousel -->
	
<!--======================================================================-->
<!--============================NAVIGATION !!=============================-->	
<!--======================================================================-->	
  
<?php get_template_part( 'nav' ); ?>

<!--======================================================================-->
<!--=========================END NAVIGATION !!============================-->	
<!--======================================================================-->	  



 	</div> <!-- /container -->
	<div class="push"><!--//--></div>
    </div><!-- /wrapper -->

<?php get_footer(); ?>
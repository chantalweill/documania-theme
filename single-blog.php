						

					<div class="clearfix"><h2>News | <h3> &nbsp;What's Going On</h3></h2>
					</div>

					<div class="row clearfix">
<?php if ( have_posts() ) while ( have_posts() ) : the_post();	?>					
						<div class="span6 ">
							<h6><?php the_title(); ?></h6>
							<?php echo get_the_content(); ?>
							<div class="logoline">&nbsp;</div>	
						</div>
<?php endwhile; ?>
						
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

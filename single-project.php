<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>						
					<div class="clearfix">
						<h2>Past Projects | <h3> &nbsp;<?php the_title();?></h3></h2>
					</div>



					<div class="row clearfix">
						
						<div class="span6">
					


			
	<!-- AnythingSlider -->
<ul class="singlepgslider">

	<?php 
	$mykey_vimeo = get_post_custom_values('vimeo'); 
	$mykey_still = get_post_custom_values('still'); 
	
	if (isset($mykey_vimeo[0])) {    
	   foreach ($mykey_vimeo as $vimeo) { ?>   
	    <li><?php echo $vimeo;?></li>
	<?php } 
	} else { echo " "; } ?>   

	
	<?php 
	if (isset($mykey_still[0])) { 
		
	foreach ($mykey_still as $still) { ?>   
	    <li><img src="<?php echo $still;?>"></li>
	<?php } 
	} else { echo " "; } ?>   
   
</ul>
   <!-- END AnythingSlider  -->										
							
			
							
							
						</div>
						
						<div class="span3half">
							
							<h6 class="tiptop">Summary</h6>
							<p class="sidebar-copy-project">
<?php $content = get_the_content(); echo $content; ?><?php echo $postid;?>
							</p>
							<hr />	
<?php endwhile;
// Reset Query
wp_reset_query();
?>

<?php $mykey_awards = get_post_custom_values('awards'); 
if (isset($mykey_credits[0])) { ?>
							<h6>Awards</h6>
							<p class="sidebar-copy-project">
<?php echo $mykey_credits[0];?>
							</p>
							<hr />
<?php } else { echo " "; } ?>

<?php $mykey_awards = get_post_custom_values('awards'); 
if (isset($mykey_awards[0])) { ?>
							<h6>Awards</h6>
							<p class="sidebar-copy-project">
<?php echo $mykey_awards[0];?>
							</p>
							<hr />
<?php } else { echo " "; } ?>
	
						</div>

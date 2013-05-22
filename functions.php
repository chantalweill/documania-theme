<?php
	add_theme_support('post-thumbnails');
	
function my_jquery_var() {
global $post;
if ( $my_custom_field_name = get_post_meta( $post->ID, 'vimeo' ) ) { 
        echo '<script type="text/javascript">var vimeo = "' . $my_custom_field_name . '";</script>' . "\n";

    }
}

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */
	
	add_action( 'wp_head', 'my_jquery_var' );
	add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

	/* ================================================================================================================= */


function script_enqueuer() {
		wp_register_style( 'style', get_template_directory_uri().'/style.css', '', '0.1', 'screen' );
        wp_enqueue_style( 'style' );		
		wp_register_style( 'bootstrap', get_template_directory_uri().'/stylesheets/bootstrap.css', '', '0.1', 'screen' );
        wp_enqueue_style( 'bootstrap' );		
		wp_register_style( 'responsive', get_template_directory_uri().'/stylesheets/bootstrap-responsive.css', '', '0.1', 'screen' );
        wp_enqueue_style( 'responsive' );
		wp_register_style( 'documania', get_template_directory_uri().'/stylesheets/documania.css', '', '0.1', 'screen' );
        wp_enqueue_style( 'documania' );
		wp_register_style( 'nivotheme', get_template_directory_uri().'/stylesheets/nivo-theme/default.css', '', '0.1', 'screen' );
        wp_enqueue_style( 'nivotheme' );
		wp_register_style( 'nivoslider', get_template_directory_uri().'/stylesheets/nivo-slider.css', '', '0.1', 'screen' );
        wp_enqueue_style( 'nivoslider' );
		wp_register_style( 'nivogallery', get_template_directory_uri().'/stylesheets/nivo-gallery.css', '', '0.1', 'screen' );
        wp_enqueue_style( 'nivogallery' );





}
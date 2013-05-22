<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till closing head tag.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>


	<script type="text/javascript" src="//use.typekit.net/kyk4dbv.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.nivo.slider.js"></script>

	<!-- Anything Slider optional plugins -->

	<!-- Anything Slider -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/stylesheets/anythingslider.css">
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.anythingslider.js"></script>


	<!-- AnythingSlider optional FX extension -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.anythingslider.fx.js"></script>

	<!-- Site-specific Jquery file -->
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/site.js"></script>
	
	
<?php wp_head() ?>

</head>
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php /* <meta name="viewport" content="width=device-width, initial-scale=1.0" /> */ ?>
<meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=false"/> 
<?php /* <meta name="viewport" content="width=320" /> */ ?>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon_mirmillo.png" />
<?php

wp_enqueue_script( 'jquery' );


	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/modernizr-1.6.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function() {

	jQuery("a.fancybox").fancybox({
		'width'		      :	600,
		'height'		      :	650,
		'overlayOpacity'	 :	'0.4',
		'overlayColor'		 :	'#000',
		'hideOnContentClick' :   false,
		'autoScale'     	 :   false,
   	'transitionIn'		 :   'elastic',
		'transitionOut'	 :   'elastic',
	'type'			 :   'iframe'

	});
  });
</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<header>
  <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    <?php bloginfo( 'name' ); ?>
    </a></h1>
  <div id="site-description">
    <?php bloginfo( 'description' ); ?>
  </div>
</header>
<nav>
  <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
</nav>

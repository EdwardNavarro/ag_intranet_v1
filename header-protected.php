<!doctype html>
<!--[if lt IE 7 ]>	<html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>		<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>		<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>		<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<title><?php
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

			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', TEMPLATE_DOMAIN ), max( $paged, $page ) );

		?></title>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<!-- Temporal Files -->
		<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css'/>
		<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css'/>
		<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/style.css'/>
		<link rel='stylesheet' type='text/css' href='<?php bloginfo('stylesheet_directory'); ?>/css/style-landing.css'/>
		<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.2.min.js"></script>
		<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
		<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

		<?php wp_head(); ?> 

		<!-- automatic-feed-links in functions.php -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	</head>
	<body>
		<!--[if lt IE 7]>
	        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	    <![endif]-->

	    
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	  
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Merriweather:700' rel='stylesheet' type='text/css'>	
		
		<!-- Meta Stuff -->
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="profile" href="http://gmpg.org/xfn/11">
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/build/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/build/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/build/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php bloginfo('template_url'); ?>/build/favicons/manifest.json">
		<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/build/favicons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/build/favicons/favicon.ico">
		<meta name="msapplication-config" content="<?php bloginfo('template_url'); ?>/build/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		
		<meta name="og:image" content="<?php bloginfo('template_url'); ?>/build/images/facebook-image.jpg">

		
		
		
		<!-- CSS -->
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/build/css/style.css">
	    
	    <!-- Wordpress Stuff -->
	    <?php wp_head(); ?>
	    <?php wp_enqueue_script( 'jquery' ); ?> 
		
	</head>
<body <?php body_class(); ?>>
	<div class="page-wrap">


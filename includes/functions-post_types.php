<?php 

// -----------------------------------------------------------------------------
//! Using Extended CPTs for quick + easy custom post types
//! See https://github.com/johnbillion/extended-cpts/wiki for documentation
// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------
//! Restaurants
// -----------------------------------------------------------------------------

register_extended_post_type( 'restaurant', array(
	
	# Change Title Prompt
	'enter_title_here' => 'Restaurant Name',
	
	# Change Menu Icon
	'menu_icon' => 'dashicons-welcome-write-blog',
	
	#Hierarchical?
	'hierarchical' => false,
	
), array(

    # Override the base names used for labels:
    'singular' => 'Restaurant',
    'plural'   => 'Restaurants'
    //'slug'     => 'newsletter-article'
    
));


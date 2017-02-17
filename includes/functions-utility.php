<?php 

// -----------------------------------------------------------------------------
//! Title Tags
// -----------------------------------------------------------------------------

function bbq_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'bbq_setup' );


// -----------------------------------------------------------------------------
//! Add Body Class
// -----------------------------------------------------------------------------	
	
add_filter('body_class', 'add_section_to_body_class');

function add_section_to_body_class($classes){
	global $post;
	
	if( is_object( $post ) ) {
		if($post->post_type == "page" && $post->post_parent){
			$ancestors = array_reverse(get_post_ancestors($post));
			
			if($ancestors) $classes[] = 'section-' . $ancestors[0];
		}
		elseif($post->post_type == "page" && $post->post_parent == 0){
			$classes[] = 'section-' . $post->ID;
		}
	}
	return $classes;
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );



// -----------------------------------------------------------------------------
//! Capitalization Correction - https://github.com/stormuk/WordPress-Force-Lowercase-URLs
// -----------------------------------------------------------------------------


if(!is_admin()){
	add_action( 'init', 'storm_force_lowercase' );
}

function storm_force_lowercase(){
	$url = $_SERVER['REQUEST_URI'];
	if(preg_match('/[\.]/', $url)){
		return;
	}
	if(preg_match('/[A-Z]/', $url)){
		$lc_url = strtolower($url);
		header("Location: " . $lc_url);
		exit(0);
	}
}
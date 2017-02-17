<?php 
	
// -----------------------------------------------------------------------------
//! Featured Images
// -----------------------------------------------------------------------------

add_theme_support('post-thumbnails', array('page') );


// -----------------------------------------------------------------------------
//! Image Sizes
// -----------------------------------------------------------------------------

add_image_size( 'video_still', 611, 343, true);

// -----------------------------------------------------------------------------
//! Use Relative Image Links instead of full path when uploading
// -----------------------------------------------------------------------------

add_filter('get_image_tag', 'theme_get_image_tag');
function theme_get_image_tag($html) 
{
    return str_replace(get_bloginfo('url'), '', $html);
}

<?php 
	
// -----------------------------------------------------------------------------
//! Use Relative Image Links instead of full path when uploading
// -----------------------------------------------------------------------------

add_filter('get_image_tag', 'theme_get_image_tag');
function theme_get_image_tag($html) 
{
    return str_replace(get_bloginfo('url'), '', $html);
}

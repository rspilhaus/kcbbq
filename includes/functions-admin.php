<?php	
// -----------------------------------------------------------------------------
//! Remove Less-than-useful Dashboard Widgets
// -----------------------------------------------------------------------------
	
	add_action( 'wp_dashboard_setup', 'remove_default_dashboard_widgets' );
	function remove_default_dashboard_widgets() {
		global $wp_meta_boxes;
		
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
	}

// -----------------------------------------------------------------------------
//! Remove Some Sidebar Menu Items that are often confusing to clients
// -----------------------------------------------------------------------------
	
	
	function remove_menus_not_in_use(){
		
		//Remove Menus
		remove_menu_page( 'edit.php' );               		//Posts
		remove_menu_page( 'edit-comments.php' );      		//Comments
				
		//Remove Submenus
		$page = remove_submenu_page( 'index.php', 'update-core.php' );
		
		// Remove Customize
		global $submenu;
		unset($submenu['themes.php'][6]); 
	  
	  
	}
	add_action( 'admin_menu', 'remove_menus_not_in_use', 999 );


// -----------------------------------------------------------------------------
//! Remove Comments From Other Places
// -----------------------------------------------------------------------------

	// Removes from post and pages
	add_action('init', 'remove_comment_support', 100);
	
	function remove_comment_support() {
	    remove_post_type_support( 'post', 'comments' );
	    remove_post_type_support( 'page', 'comments' );
	}
	// Removes from admin bar
	function mytheme_admin_bar_render() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('comments');
	}
	add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
	

// -----------------------------------------------------------------------------
//! Remove Some Admin Bar Items
// -----------------------------------------------------------------------------

	// Customize links
	add_action( 'wp_before_admin_bar_render', function() {
		global $wp_admin_bar;
		
		// Ditch the WP Links
		$wp_admin_bar->remove_menu( 'wp-logo' );
		
		// Hide unused items
		$wp_admin_bar->remove_menu( 'search' );
		
	} );



// -----------------------------------------------------------------------------
//! Branded Footer Text
// -----------------------------------------------------------------------------
	
	add_filter( 'admin_footer_text', function( $text ) {
		$footer_url = "https://ryanspilhaus.com";
		$footer_name = "Ryan Spilhaus";
		
		$text = sprintf( 'WordPress design and development by <a href="%1$s">%2$s</a>', $footer_url, $footer_name );
		
		return $text;
	} );

	
// -----------------------------------------------------------------------------
//! Remove Wordpress Version
// -----------------------------------------------------------------------------

	function mbb_remove_version() {
		return '';
	}
	
	add_filter('the_generator', 'mbb_remove_version');
	
	

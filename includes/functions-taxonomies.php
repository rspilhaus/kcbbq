<?php 

// -----------------------------------------------------------------------------
//! Using Extended Taxonomies for quick + easy Taxonomies
//! See https://github.com/johnbillion/extended-taxos for documentation
// -----------------------------------------------------------------------------

// -----------------------------------------------------------------------------
//! Resource Types
// -----------------------------------------------------------------------------
register_extended_taxonomy( 'restaurant-location', 'restaurant', array(

    # Use radio buttons in the meta box for this taxonomy on the post editing screen:
    //'meta_box' => 'dropdown',

	# Show this taxonomy in the 'At a Glance' dashboard widget:
    'dashboard_glance' => false,

    # Add a custom column to the admin screen:
    'admin_cols' => array(
        'updated' => array(
            'title'       => 'Updated',
            'meta_key'    => 'updated_date',
            'date_format' => 'd/m/Y'
        ),
    ),

), array(

    # Override the base names used for labels:
    'singular' => 'Restaurant Location',
    'plural'   => 'Restaurant Locations'
    //'slug'     => 'restaurant-location'

) );


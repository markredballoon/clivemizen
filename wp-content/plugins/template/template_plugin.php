<?php
/*
Plugin Name: __PLUGIN_NAME__
Plugin URI: http://redballoon.io
Description: __PLUGIN_DESCRIPTION__
Version: 0.0
Author: Red Balloon Design Ltd.
Author URI: http://redballoon.io
License: GPLv2
*/

/* WHAT THIS TEMPLATE DOES
/*
/* CUSTOM POST TYPE 
/* Creates and registers the post type: https://codex.wordpress.org/Function_Reference/register_post_type
/*
/* TAXONOMIES
/* Create any custom taxonomies: https://codex.wordpress.org/Taxonomies
/*
/* CUSTOM META BOXES
/* Registers custom fields and allows to be ultised and saved by wordpress post type: http://wptheming.com/2010/08/custom-metabox-for-post-type/
/*
/* SCRIPTS
/* Registers and enqueues our scripts for Wordpress:
/* Does a check to see that the shortcode exists on the page in order to add the styles/scripts.
/*
/********************/


// Custom Post Type
add_action( 'init', 'create_[post_type]' );
function create_[post_type]() {
    register_post_type( '[post_type]',
        array(
            'labels' => array(
                'name' => 'FAQs',
                'singular_name' => 'Question',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Question',
                'edit' => 'Edit',
                'edit_item' => 'Edit',
                'new_item' => 'New Question',
                'view' => 'View',
                'view_item' => 'View Question',
                'search_items' => 'Search Questions',
                'not_found' => 'No Questions found',
                'not_found_in_trash' => 'No Questions found in Trash',
                'parent' => 'Parent Questions'
            ),

            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies' => array('faqs_cat'), // For custom taxonomies
            'map_meta_cap' => true,
            'has_archive' => false
        )
    );
}

// Taxonomies
add_action( 'init', 'faqs_taxonomies', 0 );
function faqs_taxonomies() {
    register_taxonomy(
        'faqs_cat',
        'faqs',
        array(
            'labels' => array(
                'name' => 'FAQ Category',
                'add_new_item' => 'Add New',
                'new_item_name' => "New"
            ),
            'show_tagcloud' => false,
            'show_ui' => true,
		    'show_admin_column' => true,
            'hierarchical' => true
        )
    );
}


// Custom Meta Boxes 
add_action( 'add_meta_boxes', 'add_quotes_metaboxes' );
function add_quotes_metaboxes() {
    add_meta_box('quote_citation', 'Citation', 'quote_citation', 'quotes', 'normal', 'high');
}
// Add the meta box to WP Admin
function quote_citation() {
	global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="quotemeta_noncename" id="quotemeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the location data if its already been entered
	$cite = get_post_meta($post->ID, '_cite', true);
	
	// Echo out the field
	echo '<input type="text" name="_cite" value="' . $cite  . '" class="widefat" />';
}
// Save the Metabox Data
function wpt_save_quote_meta($post_id, $post) {
	
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['quotemeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

  $events_meta = $_POST['_cite'];
  update_post_meta( $post_id, '_cite', $events_meta );
	
}
add_action('save_post', 'wpt_save_quote_meta', 1, 2); // save the custom fields


// Scripts
add_action( 'wp_enqueue_scripts', 'faqs_enqueue_scripts' );
function faqs_enqueue_scripts() {
    if ( shortcode_exists('faqs') ) {
        wp_enqueue_style( 'faqs-styles', plugins_url( 'css/faqs.min.css', __FILE__ ) );
    	wp_enqueue_script( 'faqs-scritps', plugins_url( 'js/faqs.js', __FILE__ ), array('jquery'), '1.0', true );
    };
};

<?php
/*
Plugin Name: FAQs
Plugin URI: http://redballoon.io
Description: Ouput Faq section with built in show/hide.
Version: 1.0.1
Author: Red Balloon Digital
Author URI: http://redballoon.io
License: GPLv2
*/
/*
# Updates required:

* Add filters to the content output?
* Add 'order by' option

*/
// Custom Post Type

add_action( 'init', 'create_faqs' );

function create_faqs() {
    register_post_type( 'faqs',
        array(
            'labels' => array(
                'name' => 'FAQs',
                'singular_name' => 'Question',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New FAQ',
                'edit' => 'Edit',
                'edit_item' => 'Edit',
                'new_item' => 'New FAQ',
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
			'taxonomies' => array('faqs_cat'),
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

// Scripts
function faqs_enqueue_scripts() {
    if ( shortcode_exists('faqs') ) {
        wp_enqueue_style( 'faqs-styles', plugins_url( 'css/faqs.min.css', __FILE__ ) );
    	wp_enqueue_script( 'faqs-scritps', plugins_url( 'js/faqs.js', __FILE__ ), array('jquery'), '1.0', true );
    };
};
add_action( 'wp_enqueue_scripts', 'faqs_enqueue_scripts' );

// Shortcodes
add_shortcode('faqs', 'faqs_shortcode');
include('inc/shortcode.php');
?>

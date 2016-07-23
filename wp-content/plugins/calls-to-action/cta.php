<?php
/*
Plugin Name: RB Calls To Action
Plugin URI: http://redballoon.io
Description: Call to Action Link area for distribution cross site
Version: 1.0.0
Author: Red Balloon Design Ltd.
Author URI: http://redballoon.io
License: GPLv2
*/

/*
Updates required:

* Update to how cta html is saved and created.
* Update the inc/shortcode.php file to create the cta html correctly.
* Create styles
* Custom Meta is not in this version of the plugin however it may be required for Including specific CTA links on specific pags. See OITC Website for details.
*/


// Custom Post Type
add_action( 'init', 'register_cpt_cta' );
function register_cpt_cta() {

        $labels = array(
            'name' => __( 'Call To Actions', 'cta' ),
            'singular_name' => __( 'CTA', 'cta' ),
            'add_new' => __( 'Add New', 'cta' ),
            'add_new_item' => __( 'Add New Module', 'cta' ),
            'edit_item' => __( 'Edit CTA', 'CTA' ),
            'new_item' => __( 'New CTA', 'cta' ),
            'view_item' => __( 'View CTA', 'cta' ),
            'search_items' => __( 'Search CTA', 'cta' ),
            'not_found' => __( 'No modules found', 'cta' ),
            'not_found_in_trash' => __( 'No CTA found in Trash', 'cta' ),
            'parent_item_colon' => __( 'Parent CTA:', 'cta' ),
            'menu_name' => __( 'CTAs', 'cta' ),
        );

        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'description' => 'Call to Action Link area for distribution cross site',
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
            'taxonomies' => array( 'category', 'post_tag', 'video_categories' ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'show_in_nav_menus' => true,
            'publicly_queryable' => false,
            'exclude_from_search' => true,
            'has_archive' => false,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'page'
        );

        register_post_type( 'cta', $args );
}

// Custom Meta Boxes
add_action( 'add_meta_boxes', 'add_cta_metaboxes' );
function add_cta_metaboxes() {
    add_meta_box('cta_link', 'URL to page', 'cta_link', 'cta', 'normal', 'low');
}
// Add the meta box to WP Admin
function cta_link() {
	global $post;

	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="ctameta_noncename" id="ctameta_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	// Get the data if its already been entered
	$cta_url = get_post_meta($post->ID, '_cta_url', true);

	// Echo out the field
	echo '<input type="text" name="_cta_url" value="' . $cta_url  . '" class="widefat" />';
}
// Save the Metabox Data
function wpt_save_cta_meta($post_id, $post) {
	$custom_meta = '';
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( isset($_POST['ctameta_noncename']) && !wp_verify_nonce( $_POST['ctameta_noncename'], plugin_basename(__FILE__) )) {
		return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.

	// Add values of $events_meta as custom fields
	if( isset($_POST['ctameta_noncename'])){
		$custom_meta = $_POST['_cta_url'];
	}


  update_post_meta( $post_id, '_cta_url', $custom_meta );

}
add_action('save_post', 'wpt_save_cta_meta', 1, 2); // save the custom fields


// Scripts
function add_cta_files(){
    if ( shortcode_exists('cta') ) {
        wp_enqueue_style( 'cta-styles', plugins_url( 'css/cta.min.css', __FILE__ ) );
    	// wp_enqueue_script( 'cta-scritps', plugins_url( 'js/cta.js', __FILE__ ), array('jquery'), '1.0', true );
    };
};
add_action( 'wp_enqueue_scripts', 'add_cta_files' );

// Shortcodes
add_shortcode('cta', 'cta_shortcode');
include('inc/shortcode.php');


?>

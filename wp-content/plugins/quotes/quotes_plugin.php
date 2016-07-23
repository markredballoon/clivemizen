<?php
/*
Plugin Name: Quotes
Plugin URI: http://redballoon.io
Description: Ouput Quotes section.
Version: 1.0.1
Author: Red Balloon Digital
Author URI: http://redballoon.io
License: GPLv2
*/

/*
#Updates required:

* Shortcode option: Add quote marks around quote (?)

*/

// Custom Post Type

add_action( 'init', 'create_quotes' );

function create_quotes() {
    register_post_type( 'quotes',
        array(
            'labels' => array(
                'name' => 'Quotes',
                'singular_name' => 'quote',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New quote',
                'edit' => 'Edit',
                'edit_item' => 'Edit',
                'new_item' => 'New quote',
                'view' => 'View',
                'view_item' => 'View quote',
                'search_items' => 'Search quotes',
                'not_found' => 'No quotes found',
                'not_found_in_trash' => 'No quotes found in Trash',
                'parent' => 'Parent quotes'
            ),

            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive' => false,
            'register_meta_box_cb' => 'add_quotes_metaboxes'
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
	$custom_meta = '';
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( isset($_POST['quotemeta_noncename']) && !wp_verify_nonce( $_POST['quotemeta_noncename'], plugin_basename(__FILE__) )) {
		return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.

	// Add values of $events_meta as custom fields
	if( isset($_POST['quotemeta_noncename'])){
		$custom_meta = $_POST['_cite'];
	}


  update_post_meta( $post_id, '_cite', $custom_meta );

}
add_action('save_post', 'wpt_save_quote_meta', 1, 2); // save the custom fields




// Scripts
function add_quote_files(){
    if ( shortcode_exists('quote') ) {
        wp_enqueue_style( 'quotes-styles', plugins_url( 'css/quotes.min.css', __FILE__ ) );
    	// wp_enqueue_script( 'quotes-script', plugins_url( 'js/quotes.js', __FILE__ ), array('jquery'), '1.0', true );
    };
};
add_action( 'wp_enqueue_scripts', 'add_quote_files' );

// Shortcodes
include('inc/shortcode.php');
add_shortcode('quote', 'quote_shortcode');

?>

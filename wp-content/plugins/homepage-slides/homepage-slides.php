<?php
/*
Plugin Name: Homepage Slides
Plugin URI: http://redballoon.io
Description: Homepage slides for Bootstrap carousel or similar
Version: 0.1.1
Author: Red Balloon Design Ltd
Author URI: http://redballoon.io
License: GPLv2
*/


/*
# Updates:

* Create custom styles (css/slides.less) (?)

*/

// Custom Post Type

add_action( 'init', 'register_cpt_home_slides' );
function register_cpt_home_slides() {

		// Setup the Custom Post Type
        $labels = array(
            'name' => __( 'Homepage Slides', 'slides' ),
            'singular_name' => __( 'Homepage Slide', 'slide' ),
            'add_new' => __( 'Add New', 'slide' ),
            'add_new_item' => __( 'Add New Slide', 'slide' ),
            'edit_item' => __( 'Edit Slide', 'slide' ),
            'new_item' => __( 'New Slide', 'slide' ),
            'view_item' => __( 'View Slide', 'slide' ),
            'search_items' => __( 'Search slide', 'slide' ),
            'not_found' => __( 'No slides found', 'slide' ),
            'not_found_in_trash' => __( 'No Slides found in Trash', 'module' ),
            'parent_item_colon' => __( 'Parent slide:', 'module' ),
            'menu_name' => __( 'Slides', 'modules' ),
        );

        $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'description' => 'Homepage slides for a carousel or similar',
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields' ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_nav_menus' => false,
            'publicly_queryable' => false,
            'exclude_from_search' => true,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'page',
            'page-attributes' => true
        );
        register_post_type( 'slide', $args );
}


// Custom Meta Boxes
add_action( 'add_meta_boxes', 'add_slides_metaboxes' );
function add_slides_metaboxes() {
    add_meta_box('slide_attributes', 'Slide Attributes', 'slide_attributes', 'slide', 'normal', 'high');
}
// Add the meta box to WP Admin
function slide_attributes() {
	global $post;

	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="slidemeta_noncename" id="slidemeta_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	// Get the location data if its already been entered

		$slideMainClass = get_post_meta($post->ID, '_slidemainclass', true);
        $slideBGClass = get_post_meta($post->ID, '_slidebgclass', true);
        $slideLink = get_post_meta($post->ID, '_slidelink', true);

	// Echo out the field
        echo '<p>URL to page:</p>';
		echo '<input type="text" name="_slidelink" value="' . $slideLink  . '" class="widefat" />';
        echo '<p>CSS class for the slide item</p>';
        echo '<input type="text" name="_slidemainclass" value="' . $slideMainClass  . '" class="widefat" />';
        echo '<p>CSS class for the slide background</p>';
        echo '<input type="text" name="_slidebgclass" value="' . $slideBGClass  . '" class="widefat" />';
}


// Save the Metabox Data
function wpt_save_slide_meta($post_id, $post) {
	$custom_meta = '';
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( isset($_POST['slidemeta_noncename']) && !wp_verify_nonce( $_POST['slidemeta_noncename'], plugin_basename(__FILE__) )) {
		return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	if( isset($_POST['slidemeta_noncename'])){
		$custom_meta['_slidemainclass'] = $_POST['_slidemainclass'];
		$custom_meta['_slidebgclass'] = $_POST['_slidebgclass'];
		$custom_meta['_slidelink'] = $_POST['_slidelink'];

		foreach ($custom_meta as $key => $value) { // Cycle through the $events_meta array!
			if( $post->post_type == 'revision' ) return; // Don't store custom data twice
			$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
			if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
				update_post_meta($post->ID, $key, $value);
			} else { // If the custom field doesn't have a value
				add_post_meta($post->ID, $key, $value);
			}
			if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
		}

	}

  update_post_meta( $post_id, 'slide_attributes', $custom_meta );

}
add_action('save_post', 'wpt_save_slide_meta', 1, 2); // save the custom fields




// Scripts
function slides_enqueue_scripts() {
    // Registering Scripts for swipe effect. Enqueued in shortcode.
    wp_register_script('slides-swipe-script', plugins_url( 'js/swipe-effect.js', __FILE__ ), array('jquery', 'jquery-mobile'), '1.0', true );
    wp_register_script('jquery-mobile', plugins_url( 'js/jquery.mobile.custom.js', __FILE__ ), array('jquery'), '1.4.5', true );

    if ( shortcode_exists('slides') ) {
        // Used for testing:
        // wp_enqueue_style( 'slides-styles', plugins_url( '../../../proto/bootstrap/dist/css/bootstrap.min.css', __FILE__ ) );
    	// wp_enqueue_script( 'slides-scritps', plugins_url( '../../../proto/bootstrap/dist/js/bootstrap.min.js', __FILE__ ), array('jquery'), '1.0', true );
    };
};
add_action( 'wp_enqueue_scripts', 'slides_enqueue_scripts' );


// Shortcodes
add_shortcode('slides', 'slides_shortcode');
include('inc/shortcode.php');

?>

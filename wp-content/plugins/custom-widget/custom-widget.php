<?php
/*
Plugin Name: Custom Widget
Plugin URI: http://redballoondigital.com/
Description: Template Plugin folder.
Version: 1.0
Author: Red Balloon Digital
Author URI: http://redballoondigital.com/
License: GPLv2
*/

// Creating the widget
class custom_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			// Base ID of your widget
			'custom_widget',

			// Widget name will appear in UI
			__('Custom Widget', 'custom_widget_domain'),

			// Widget description
			array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'custom_widget_domain' ), )
		);
	}

	// Creating widget front-end
	// This is where the action happens

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		echo __( 'Hello, World!', 'custom_widget_domain' );
		include 'inc/customwidget.php';
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'custom_widget_domain' );
		}

		if ( isset( $instance[ 'other-input' ] ) ) {
			$input1 = $instance[ 'other-input' ];
		}
		else {
			$input1 = __( 'Input content here', 'custom_widget_domain' );
		}

		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'other-input' ); ?>"><?php _e( 'other-input:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'other-input' ); ?>" name="<?php echo $this->get_field_name( 'other-input' ); ?>" type="text" value="<?php echo esc_attr( $input1 ); ?>" />
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

} // Class custom_widget ends here

// Register and load the widget
function load_custom_widget() {
	register_widget( 'custom_widget' );
}
add_action( 'widgets_init', 'load_custom_widget' );


/*

This is an example of a custom widget created to word with simple_page_sidebars

*/
?>

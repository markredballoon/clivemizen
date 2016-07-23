<?php
// This is where the code for the shortcode output goes
function plugin_template_shortcode( $atts, $content = null ) {

    extract( shortcode_atts( array(
                'att1' => '',
                'att2' => ''
                // ...etc
            ), $atts ) );

    $class = 'class01';

    if ( $att1 || $att2 ) {
        $class = 'class1';
        $class .= ( $att1 ) ? ' ' . $att1 : '';
        $class .= ( $att2 ) ? ' ' . $att2 : '';
    }

    $output = '<div class="' . $class . '">' . do_shortcode( $content ) . '</div>';

    // return $output;

    echo "test";
}
?>

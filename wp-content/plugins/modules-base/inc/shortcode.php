<?php
function module_shortcode( $atts, $content = null)  {

    extract( shortcode_atts( array(
                'type' => ''               // Type of module eg 'forged_in_hiroshima'
            ), $atts
        )
    );

	$queried_post = get_page_by_path($type,OBJECT,'module');
	// $queried_post = get_id_by_slug($type);
    if ($type === 'forged') {
		$output .= _get_project_info('0', $queried_post->post_content);
    }
    if ($type === 'stamping') {
		$output .= _get_project_info('0', $queried_post->post_content);
    }

    return $output ;

}
function quote_shortcode( $atts, $content)  {

    extract( shortcode_atts( array(
                'cite' => ''               // Name of person to be cited in the quote
            ), $atts
        )
    );

    if ($cite === 'david') {
		$quote_img = 'david.jpg';
		$quote_title = 'David Llewellyn – Head of Design';
    }
    if ($cite === 'chris') {
		$quote_img = 'chris.jpg';
		$quote_title = 'Chris Voshall';
    }
    if ($cite === 'tetsuo') {
		$quote_img = 'tetsuo.jpg';
		$quote_title = 'Testuo';
    }

    $output = '<div class="quote alt-quote clearfix"><div class="quote-image" ><div class="image-wrap"><img src="'.get_bloginfo( 'template_url' ).'/images/quote/'.$quote_img.'" alt="'.$quote_title.'"/></div></div><div class="container"><div class="row"><div class="the-quote col-md-10 col-md-offset-14 col-xs-24 col-xs-offset-0 text-center">';
	$output .= '<p>' . $content . '</p>';
	$output .= '<p><strong>' . $quote_title . '</strong></p>';
	$output .= '</div></div></div></div>';
    return $output;

}
?>

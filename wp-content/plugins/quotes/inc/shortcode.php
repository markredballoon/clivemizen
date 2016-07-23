<?php

function quote_shortcode( $atts, $content)  {

    extract( shortcode_atts( array(
                'id' => ''               // ID of quotes to bring in.
            ), $atts
        )
    );

    $quotes_args = array(
        'include' => $id,
        'numberposts' => 200,
        'post_type' => 'quotes',
        'post_status' => 'publish'
        // Order the posts:
        // 'orderby'=> 'ID',
        // 'order'=> 'ASC'
    );

    $quotes_cpt = get_posts($quotes_args);
    $quoteOutput = '';

	foreach($quotes_cpt as $quote) {
		if (empty($content)) {
			$content = $quote->post_content;
		}
        $citation = get_post_meta($quote->ID, '_cite', true);
        $quoteImage = wp_get_attachment_image_src( get_post_thumbnail_id($quote->ID), 'full' );

        // Fix for multi thumbnail plugin
        if ( gettype($quoteImage) === 'array') {
            $quoteImage = $quoteImage[0];
        }

        $quoteOutput .= '<div class="quotes-plugin"><blockquote>';
        $quoteOutput .= '<div class="quote-image" style="background-image:url('.$quoteImage.')"></div>';
        $quoteOutput .= '<div class="the-quote">';
        $quoteOutput .= $content;
        $quoteOutput .= '<cite>'.$citation.'</cite>';
        $quoteOutput .= '</div><!--the-quote-->';
        $quoteOutput .= '</blockquote></div><!--quotes-plugin-->';
	}

	echo $quoteOutput;

}
?>
<?/*
<blockquote class="quote side-by-side">
    <div class="quote-image side-by-side">
        <img src="http://placehold.it/500x500"/>
    </div>
    <div class="the-quote">
        <p>Quote goes here.
            <br>
        side-by-side img-left</p>
        <cite>-Source</cite>
    </div><!--the-quote-->
</blockquote><!--quote-->
*/?>

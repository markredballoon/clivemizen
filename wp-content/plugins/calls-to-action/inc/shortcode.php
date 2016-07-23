<?php

function cta_shortcode( $atts, $content = null)  {

    extract( shortcode_atts( array(
                'parent' => '',               // ID of the list of the CTA's top bring in (If blank fetches all CTA posts
                'exclude' => ''				 // ID's of CTA's to exclude from the output
            ), $atts
        )
    );
	$ctaImgsrc = '';
	$output = '';
	$cTAoutput = '';

	global $post;
	$cta_args = get_posts(array(
	    'showposts' => -1,
	    'order' => 'ASC',
	    'exclude' => $exclude,
	    'post_type' => 'cta',
	    'post_parent' => $parent)
	);

	// Run through each CTA and extract the data as needed and place it in the HTML, then place that element in an array.
	foreach($cta_args as $cta) {

				$cta_url = get_post_meta($cta->ID, '_cta_url', true);
				$img = wp_get_attachment_image_src( get_post_thumbnail_id($cta->ID), 'full' );
				$title = $cta->post_title;	 // Post title
				$excerpt = $cta->post_excerpt;	 // Post excerpt

				if (!empty($img)) {
					$ctaImg = '';

                    if (gettype($img) === 'array') {
                        $ctaImgsrc = $img[0];
                    } else {
                        $ctaImgsrc = $img;
                    }

					$ctaImg .= '<div class="cta-image" style="background-image:url('.$ctaImgsrc.');"></div><!--cta-image-->';

				}

				if (!empty($cta_url)) {
					$cTAoutput .= '<a href="'.$cta_url.'" title="'.$title.'">';
				}

                /*
                If there are any issues with this plugin on a multisite then this may fix permalinks going to the wrong location:
                if (!empty($cta_url)) {
                    // Checks if internal or external link:
                    if ( mb_substr($cta_url, 0, 4) === 'http' ) {
                        // external
                        $cTAoutput	.= '<a href="'.$cta_url.'">';
                    } else {
                        // internal
                        $cTAoutput	.= '<a href="'.get_bloginfo('url').$cta_url.'">';
                    }
                }
                */


				$cTAoutput .= '<div class="cta">';
				$cTAoutput .= $ctaImg;
				$cTAoutput .= '<div class="title-box">';
				$cTAoutput .= '<h4>';
				$cTAoutput .= $title;
				$cTAoutput .= '</h4>';
				$cTAoutput .= '</div><!-- Title Box -->';
				$cTAoutput .= '</div><!-- CTA -->';

				if (!empty($cta_url)) {
					$cTAoutput .= '</a>';
				}

	}

	$parentVariable ='';
	if ($parent === $parent) {
		$parentVariable = 'example_class';// If a parent has been selected, we may need to write some custom code to display those CTA's in a wrapper or with custom classes
	}

	// Output our CTAs in our pre-determined wrapper
	$output .= '<div class="cta-wrap '.$parentVariable.'">';
	$output .= $cTAoutput;
	$output .= '</div>';

	return $output;
}
?>

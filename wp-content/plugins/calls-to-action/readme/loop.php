<?php
function cta_shortcode_altered( $atts, $content = null)  {

    extract( shortcode_atts( array(
                'action'    => '',            // Which action you want to call
                'type'      => ''               // Type of module eg 'forged_in_hiroshima'
            ), $atts
        )
    );

    $cat                    = $action;
    $cta_cat                = get_terms('cta_posts', 'orderby=count&order=ASC&hide_empty=true&include='.$cat.'');
    // Get the posts from this category
    $cta_posts_args = array(
         'posts_per_page'   => 200,
         'post_type'        => 'ctas',
         'taxonomy'         => $faqs_cat->taxonomy,
         'term'             => $faqs_cat->slug,
         'post_status'      => 'publish'
    );

    // Output the questions from this category
    $cta_posts = get_posts( $cta_posts_args );

    $output                  = '';
    $output                 .= '<div class="cta-wrap">';

    foreach($cta_posts as $cta_post){

        $single_cta          = '';
        $single_cta         .= '<div class="cta"><a href="#">';
        $single_cta         .= '<div class="cta-image" style="background-image:url('.$cta_post->image.');"></div><!--cta-image-->';
        $single_cta         .= '<div class="title-box"><h4>'.$cta_post->ID.'</h4></div><!--title-box-->';
        $single_cta         .= '</a></div><!--cta-->';

        $output             .= $single_cta;
    }

    $output                 .= '</div><!--cta-wrap-->';

    return $output ;
}
?>

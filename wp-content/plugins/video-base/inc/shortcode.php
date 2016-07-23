<?php
function video_shortcode( $atts, $content = null)  {

    extract( shortcode_atts( array(
                'id'                => '',                // id of the video - required to the hook into the video post
                'youtube_id'        => '',                // url of the video - if no id and want to link to a youtube video embed
                'title'             => 'show',            // SHOW/HIDE the title - default is show.
                'title_style'       => '',                // How to display the title of the page. Default is blank. "overlayed" absolutly positions the title over the video in the bottom left hand corner.
                'thumbnail'         => 'show',            // whether or not to SHOW/HIDE the thumbnail. default to show and only available on embedded video.
                'excerpt'           => 'hide',            // whether to SHOW, HIDE or replace the excerpt.
                'type'              => 'embed',           // As a MODAL or as an in post EMBED? Default is embed
                'iframe_url'        => ''                 // URL to use if id and youtube_id haven't been set.
            ), $atts
        )
    );

    // Count for the video to add unique IDs to each video.
    static $videoCount = 0;
    //if we have an id, get the video post and populate based on users options
    if ( !empty($youtube_id) OR !empty($id) ){
        if ( !empty($id) ) {
            $video                  = get_post( $id );
            $video_url_id		    = get_post_meta($video->ID, '_video_url_id', true);
            $videoExcerpt           = apply_filters('the_excerpt', get_post_field('post_excerpt', $video));

    		if ( !empty($youtube_id) ) {
                $videoYT_ID         = $youtube_id;
            } else {
                $videoYT_ID         = $video_url_id;
            }

            // decide to show/hide excerpt
            if ( $excerpt === 'show') {
                $excerptHTML        = '<div class="excerpt">'.$videoExcerpt.'</div>';
            } else {
                $excerptHTML        = '';
            }
            // decide to replace the title
            if ( !empty($video->post_title) ) {
                $titleOUT           = $video->post_title;
            }
            // we can also only show video thumbs videos with id's, but tat code is currently below.
        } else {
            $videoYT_ID             = $youtube_id;
            $titleOUT               = $content;
            $excerptHTML            = '';
        }

        // get padding for responsive height:
        // This output can also be in xml instead of json. More info on this output: http://oembed.com/.
        $videoYTInfoJSON            = @file_get_contents('https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v='.$videoYT_ID.'&format=json');
        if( $videoYTInfoJSON === FALSE ) {
            // Fallback padding value:
            $videoAR                = 56.25;
        } else {
            // Decodes json and calculates the aspect ratio.
            $videoYTInfo            = json_decode($videoYTInfoJSON);
            $videoAR                = (intval($videoYTInfo->height) / intval($videoYTInfo->width)) * 100;
        }
        $videoARPadding             = 'padding-bottom:'.strval($videoAR).'%;';

        // Creates the HTML for the thumbnail.
        if ( $thumbnail === 'show' && !empty($id) && has_post_thumbnail($id) ) {

            $thumbcodesrc           =  wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');

            // Fix for multi post thumbnails
            if (gettype($thumbcodesrc) === 'array') {
                $thumbcodesrc = $thumbcodesrc[0];
            }

        } else {
            $thumbcodesrc           = 'http://img.youtube.com/vi/'.$videoYT_ID.'/hqdefault.jpg';
        }

        $thumbnailHTML              = '<div class="video-thumbnail" style="background-image:url('.$thumbcodesrc.');"><div class="play-icon"></div></div>';

        // HTML for the iframe.
        $iframeHTML                 = '<iframe width="800" height="800" src="https://www.youtube.com/embed/'.$videoYT_ID.'?feature=oembed&amp;enablejsapi=1" frameborder="0" allowfullscreen=""></iframe>';
        $host                       = 'youtube';

    } else {
        $titleOUT                   = '';
        $videoARPadding             = 'padding-bottom:56.25%;';
        $thumbnailHTML              = '';
        $excerptHTML                = '';
        $iframeHTML                 = '<iframe src="'.$iframe_url.'" frameborder="0" allowfullscreen="" width="660" height="340"></iframe>';
        $host                       = '';
    }

    // Creates html for video title.
    $titleHTML                      = '';
    if ( $title != 'hide' ) {
        if (strlen($content) > 0) {
            $titleHTML              = '<div class="video-title '.$title_style.'"><h4>' . $content . '</h4></div>';
        } else if (strlen($titleOUT) > 0 ) {
            $titleHTML              = '<div class="video-title '.$title_style.'"><h4>' . $titleOUT . '</h4></div>';
        }
    }

    $embed = ''; // Gets added in the main content area where the shortcode is.
    $modal = ''; // Gets added at the bottom of the page.

    if ( $type === 'embed' ) {
        $embed                 .= '<div class="video-base type--embed '.$host.'" id="video_base_'.$videoCount.'">';
        $embed                 .= '<div class="video-content" onclick="VBplayVideo(this)">';
        $embed                 .= $titleHTML;
        $embed                 .= '<div class="iframe-wrap" style="'.$videoARPadding.'">';
        $embed                 .= $iframeHTML;
        $embed                 .= $thumbnailHTML;
        $embed                 .= '</div><!--iframe-wrap outer--></div><!--video-content-->';
        $embed                 .= $excerptHTML;
        $embed                 .= '</div><!-- video_base_'.$videoCount.' -->';
    }
    if ($type === 'modal') {

        // Global variables set in ../video-base.php
        $GLOBALS['videoBaseModals'] = $GLOBALS['videoBaseModals'] + 1;
        $videoBaseModal         = $GLOBALS['videoBaseModals'];


        $embed                 .= '<div class="video-base '.$host.'" id="video_base_'.$videoCount.'">';
        $embed                 .= '<div class="video-content" onclick="jQuery(this).addClass(\'modal-open\');jQuery(\'#video-modal-'.$videoBaseModal.'\').modal(\'show\');">';
        $embed                 .= $titleHTML;
        $embed                 .= '<div class="iframe-wrap" style="'.$videoARPadding.'">';
        $embed                 .= $thumbnailHTML;
        $embed                 .= '</div><!--iframe-wrap--></div><!--video-content-->';
        $embed                 .= $excerptHTML;
        $embed                 .= '</div><!-- video_base_'.$videoCount.' -->';

        // This content gets output by the modals function above the footer;
        $modal                 .= '<div id="video-modal-'.$videoBaseModal.'" class="modal fade play-on-open" role="dialog">';
        $modal                 .= '<div class="modal-dialog"><div class="modal-content text-center"><button type="button" class="close" data-dismiss="modal">&times;</button>';
        $modal                 .= '<div class="video-base type--modal youtube" onclick="VBplayVideo(this)">';
        $modal                 .= '<div class="iframe-wrap" style="'.$videoARPadding.'">';
        $modal                 .= $iframeHTML;
        $modal                 .= '</div><!--iframe-wrap--></div><!--video-base-->';
        $modal                 .= '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
        $modal                 .= '</div><!-- Modal content--></div><!-- Modal dialog-->';
        $modal                 .= '</div><!--video-modal-'.$videoBaseModal.'-->';
    }
    $GLOBALS['modalsHTML']     .= $modal; // Adds modal to global variable so they can all get brought out together.
    $videoCount++;
    return $embed;
}
?>

// Javascript for the video base plugin
var loadedPage = false;  // Was used to prevent click before loading. Doesn't work on ios however.
var isIOS = false; // Checks if the device is ios.

if ( navigator.userAgent.match(/(iPod|iPhone|iPad)/) ) {
    isIOS = true;
}
// Youtube V2 API:
function VBcallPlayer(frame_id, func, args) {
    if (window.jQuery && frame_id instanceof jQuery) frame_id = frame_id.get(0).id;
    var iframe = document.getElementById(frame_id);
    if (iframe && iframe.tagName.toUpperCase() != 'IFRAME') {
        iframe = iframe.getElementsByTagName('iframe')[0];
    }
    if (iframe) {
        iframe.contentWindow.postMessage(JSON.stringify({
            "event": "command",
            "func": func,
            "args": args || [],
            "id": frame_id
        }), "*");
    }
}
// Adds unique ids to all youtube videos on the page.
function addIDstoVideos(){
    jQuery('.video-base.youtube iframe').each(function(index, el) {
        jQuery(this).attr('id', 'vid_' + index);
    });
    loadedPage = true;
}
// Plays video within target element
function VBplayVideo(target){
    if(loadedPage){
        $target = jQuery(target);
        $target.addClass('play-video');
        if( !isIOS ){
            VBcallPlayer( $target.find('iframe').attr('id'), 'playVideo' );
        }
    } else {
        addIDstoVideos();
        VBplayVideo(target);
    };
}
// Stops video within target element
function VBstopVideo(target){
    if(loadedPage){
        $target = jQuery(target);
        $target.removeClass('play-video');
        if( !isIOS ){
            VBcallPlayer( $target.find('iframe').attr('id'), 'stopVideo' );
        }
    } else {
        addIDstoVideos();
        VBstopVideo(target);
    };
}
jQuery(document).ready(function($) {
    addIDstoVideos();

    jQuery('.play-on-open', '#video-modals').on({
        'shown.bs.modal':function(event) {
            if (jQuery(this).find('.youtube').length > 0) {
                VBplayVideo( jQuery(this).find('.youtube')[0] );
            }
        },
        'hidden.bs.modal' : function(event){
            if (jQuery(this).find('.youtube').length > 0) {
                VBstopVideo( jQuery(this).find('.youtube')[0] );
            }
            jQuery('.modal-open').removeClass('modal-open');
        }
    });

});

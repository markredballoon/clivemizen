// Js that loads the video after the rest of the page is loaded
function loadVideos(className){
    var $videosToBeLoaded = $('video.'+className);
    for (var i = 0; i < $videosToBeLoaded.length; i++) {
        var $thisVideo = $videosToBeLoaded.eq(i);
        $thisVideo[0].load();
        // If the video has the autoplay class the video is played.
        if ($thisVideo.hasClass('defer-autoplay') ){
            $thisVideo.on('loadedmetadata', function() {
                this.play();
            });
        }
        $thisVideo.removeClass(className);
    };
};
$(window).load(function() {
    loadVideos('lazy');
});

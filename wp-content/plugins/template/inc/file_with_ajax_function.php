<?php

function template_ajax_function(){
    $postMessage      = $_POST['post_field'];
    $postMessage      = str_replace( '\\', '', $postMessage);
    $phpArray         = json_decode($ironsPost, false);
    // Returns message from AJAX
    echo return_r( $phpArray );
}

?>

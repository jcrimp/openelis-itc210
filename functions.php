<?php

register_nav_menus( array(
    'main-menu' => __('Main'), 
));

function get_top_parent_page_id() {
    global $post;
    $ancestors = $post->ancestors;
    
    //check if page is a child page (any level)
    if($ancestors) {
        //get ID of top-level page of the tree
        return end($ancestors);
    }
    else {
        //page is top level, so use its ID
        return $post->ID;
    }
}
?>